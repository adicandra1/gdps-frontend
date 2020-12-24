<?php namespace App\Views\DataContract;


class Page
{
    public int $currentPage;

    public int $totalData;

    public int $dataPerPage;

    public function __construct(int $totalData, int $currentPage = 1, int $dataPerPage = 10)
    {
        $this->currentPage = $currentPage;
        $this->totalData = $totalData;
        $this->dataPerPage = $dataPerPage;
    }

    public function totalPage() : int {
        return ceil($this->totalData/$this->dataPerPage);
    }

    public function currentPageDataCount() : string {
        return "{$this->pageFloorData()} - {$this->pageCeilingData()}";
    }

    private function nextPage() : int {
        return $this->currentPage + 1;
    }

    private function pageFloorData() : int {
        if($this->currentPage == 1) {
            return 1;
        } else {
            return $this->dataPerPage + 1;
        }
    }

    private function pageCeilingData() : int {
        if($this->currentPage == 1) {
            return $this->dataPerPage;
        } else {
            return $this->currentPage * $this->dataPerPage;
        }
    }
}