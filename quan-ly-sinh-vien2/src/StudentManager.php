<?php


class StudentManager
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->data, $dataJson);

    }

    public function loadData()
    {
        $dataFile = file_get_contents($this->data);
        return json_decode($dataFile);
    }

//Hiển thị học sinh
    public function displayStudent()
    {
        $data = $this->loadData();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item->name, $item->age, $item->phone, $item->address);
            $student->setId($item->id);
            array_push($students, $student);
        }
        return $students;
    }

//Thêm học sinh
    public function addStudent($data)
    {
        $dataFile = $this->loadData();
        $lastStudent = $dataFile[count($dataFile) - 1];
        $data['id'] = $lastStudent->id + 1;
        array_push($dataFile, $data);
        $this->saveData($dataFile);
    }

//Xóa học sinh
    public function deleteStudent($index)
    {
        $dataFile = $this->loadData();
        array_splice($dataFile, $index, 1);
        $this->saveData($dataFile);
    }

//Update học sinh
    public function updateStudent($index, $student)
    {
        $data = $this->loadData();
        $data[$index] = $student;
        $this->saveData($data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

}