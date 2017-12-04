<?php

/**
 * Class Day3
 */
class Day3 {

    /**
     * @var integer $input
     */
    protected $input;

    /**
     * @var int $column
     */
    protected $value;

    /**
     * @var int $column
     */
    protected $row;

    /**
     * @var int $column
     */
    protected $column;

    /**
     * @var array $model
     */
    protected $model;

    public function __construct()
    {
        $this->model = [0 => [0 => 1]];
        $this->column = 0;
        $this->row = 0;
        $this->value = 2;
    }

    /**
     *
     */
    public function generatePart1Spiral()
    {
        if (null === $this->input) {
            throw new RuntimeException('Input value is mandatory and was not set.');
        }

        while ($this->value <= $this->input) {
            if (!$this->isFinished()) {
                $this->moveRight();
            }
            if (!$this->isFinished()) {
                $this->moveUp();
            }
            if (!$this->isFinished()) {
                $this->moveLeft();
            }
            if (!$this->isFinished()) {
                $this->moveDown();
            }
        }
    }

    /**
     *
     */
    public function generatePart2Spiral()
    {
        if (null === $this->input) {
            throw new RuntimeException('Input value is mandatory and was not set.');
        }

        while ($this->value <= $this->input) {
            if (!$this->isFinished()) {
                $this->moveRight();
            }
            if (!$this->isFinished()) {
                $this->moveUp();
            }
            if (!$this->isFinished()) {
                $this->moveLeft();
            }
            if (!$this->isFinished()) {
                $this->moveDown();
            }
        }
    }

    /**
     *
     */
    private function getValue()
    {
        return $this->value;
    }

    /**
     *
     */
    private function getInput()
    {
        return $this->input;
    }

    /**
     * @param int $int
     */
    private function increaseRow(int $int = 1)
    {
        $this->row = $this->row + $int;
    }

    /**
     * @param int $int
     */
    private function decreaseRow(int $int = 1)
    {
        $this->row = $this->row - $int;
    }

    /**
     * @param int $int
     */
    private function increaseColumn(int $int = 1)
    {
        $this->column = $this->column + $int;
    }

    /**
     * @param int $int
     */
    private function decreaseColumn(int $int = 1)
    {
        $this->column = $this->column - $int;
    }

    private function increaseValue(int $int = 1)
    {
        $this->value = $this->value + $int;
    }

    private function assignValue($value)
    {
        $this->model[$this->row][$this->column] = $value;
    }

    /**
     *
     */
    private function moveRight() {
        do {
            $this->increaseColumn();
            $this->assignValue($this->value);
            $this->increaseValue();
        } while (isset($this->model[$this->row - 1][$this->column]) && !$this->isFinished());
    }

    /**
     *
     */
    private function moveLeft() {
        do {
            $this->decreaseColumn();
            $this->assignValue($this->value);
            $this->increaseValue();
        } while (isset($this->model[$this->row + 1][$this->column]) && !$this->isFinished());
    }

    /**
     *
     */
    private function moveUp() {
        do {
            $this->decreaseRow();
            $this->assignValue($this->value);
            $this->increaseValue();
        } while (isset($this->model[$this->row][$this->column - 1]) && !$this->isFinished());
    }

    /**
     *
     */
    private function moveDown() {
        do {
            $this->increaseRow();
            $this->assignValue($this->value);
            $this->increaseValue();
        } while (isset($this->model[$this->row][$this->column + 1]) && !$this->isFinished());
    }

    /**
     * @return bool
     */
    private function isFinished()
    {
        return ($this->getValue() <= $this->getInput()) ? false : true;
    }

    /**
     *
     */
    public function getSteps()
    {
        return sprintf(
            'The steps from number %s to center position are %s',
            $this->input,
            (abs($this->row) + abs($this->column))
        );
    }

    /**
     * @param $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }
}
