<?php

class Movie
{

    public $name;
    public $Year;

    public $Running_time;

    public $Language;

    public $Production_Country;

    public $Budget;

    // DA inserire successivamente
    // public $Produced_by;
    // public $Production_Companies;
    // public $Cinematography;


    //COSTRUTTORE

    function __construct(string $name, int $year, int $running_time, string $language, string $production_Country, int $budget)
    {
        $this->name = $name;
        $this->Year = $year;
        $this->Running_time = $running_time;
        $this->Language = $language;
        $this->Production_Country = $production_Country;
        $this->Budget = $budget;

    }

    //METODI

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

}

?>