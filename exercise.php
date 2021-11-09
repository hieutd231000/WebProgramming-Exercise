<?php
 class Page{
     private $page;
     private $title;
     private $year;
     private $copyright;

     public function get(){
         return $this->page;
     }
     public function setTitle($title){
          $this->title = $title;
     }
     public function setYear($year){
         $this->year = $year;
     }
     public function setCopyright($copyright){
         $this->copyright = $copyright;
     }
     private function addHeader(){
        $this->page = $this->page . "<h1 > Title: $this->title </h1>";
    }

    private function addFooter(){
        $this->page = $this->page . "<br> <h2>Copyright by</h2> " . $this->copyright . " <br>";
    }
    public function addContent($content){
        $this->addHeader();
        $this->page = $this->page . $content. "<br>";
        $this->addFooter();
    }
 }
$page = new Page();
$page-> setTitle("My blog");
$page-> setYear("2021");
$page-> setCopyright("hieutd2310@gmail.com");
$page->addContent("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).");
echo $page->get();
?>