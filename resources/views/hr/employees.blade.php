<x-app>
    <x-slot name='header'>Employees</x-slot>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">EMPLOYEE ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">SALARY</th>
                    <th scope="col">COMMISSION PCT</th>
                    <th scope="col">DEPARTMENT ID</th>
                    <th scope="col">HIRE DATE</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $employee->EMPLOYEE_ID }}</td>
                        <td>{{ $employee->FIRST_NAME . ' ' . $employee->LAST_NAME }}</td>
                        <td>{{ $employee->EMAIL }}</td>
                        <td>{{ $employee->PHONE_NUMBER }}</td>
                        <td>{{ number_format($employee->SALARY, 2) }}</td>
                        <td>{{ $employee->COMMISSION_PCT }}</td>
                        <td>{{ $employee->DEPARTMENT_ID }}</td>
                        <td>{{ $employee->HIRE_DATE }}</td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="7" scope="row">No Data Found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

</x-app>
