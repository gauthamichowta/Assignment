<?php
include 'config.php';
class SalaryTable
{

    public function __construct()
    {
        $this->con = OpenCon();
    }

    public function recordSalary($employee, $salary, $month, $year)
    {
        $sql = "INSERT INTO salary (employee, salary, month,year)
        VALUES ('$employee',$salary,$month,$year)";
        if ($this->con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->con->error;
        }
    }

    public function showSalaryData()
    {
        $sql = "SELECT employee, salary, month, year FROM salary";
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "Employee_name" . $row["salary"] . "<br>";
                echo "Salary" . $row["employee"] . "<br>";
                echo "Month" . $row["month"] . "<br>";
                echo "year" . $row["year"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    public function EmployeeRank($rank)
    {
       
    }
}

$salary = new SalaryTable();
$salary->recordSalary('tina', 12900, 12, 2021);
$salary->recordSalary('reena', 12900, 12, 2021);
$salary->recordSalary('hina', 12900, 12, 2021);
$data = $salary->showSalaryData();
echo $data;
$data = $salary->EmployeeRank(1);
