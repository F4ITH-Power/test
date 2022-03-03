<!---Ver 1.0.5(02.21.2022)--->
<?php

class Date
{
    private $date, $time, $years, $month;
    private $monthsList;

    function __construct($date)
    {
        $this->date = $date;
        $this->time = strtotime($date);
        $this->monthsList = [
            "1" => "Января",
            "2" => "Февраля",
            "3" => "Марта",
            "4" => "Апреля",
            "5" => "Мая",
            "6" => "Июня",
            "7" => "Июля",
            "8" => "Августа",
            "9" => "Сентября",
            "10" => "Октября",
            "11" => "Ноября",
            "12" => "Декабря"
        ];
        $this->month = $this->monthsList[date("n", $this->time)];
        $this->years = date("Y", $this->time);
    }

    /**
     *
     *
     * @return string
     */

    public function test(): string
    {
        return date("j", $this->time) . " " . $this->month . " " . date("Y", $this->time);
    }
}

$date0 = new Date($_GET["date-start"]);
echo $date0->test();
?>