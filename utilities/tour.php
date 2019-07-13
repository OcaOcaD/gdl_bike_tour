<?php 
    class Tour
    {
        private $id_tour;
        private $name;
        private $description;
        private $cover;
        private $price;
        private $schedule;
        private $image;
        private $t__include;
        //CTOR
        public function __construct(){
            $this->id_tour = -1;
            $this->name = -1;
            $this->description = -1;
            $this->cover = -1;
            $this->price = -1;
            $this->schedule = -1;
            $this->image = array();
            $this->t__include = array();
        }
        //SETS
            public function set_id_tour( $id_tour ){
                $this->id_tour = $id_tour;
            }
            public function set_name( $name ){
                $this->name = $name;
            }
            public function set_description( $description ){
                $this->description = $description;
            }
            public function set_cover( $cover ){
                $this->cover = $cover;
            }
            public function set_price( $price ){
                $this->price = $price;
            }
            public function set_schedule( $schedule ){
                $this->schedule = $schedule;
            }
            public function set_image( $image ){
                $this->image = $image;
            }
            public function add_image( $image ){
                array_push($this->image, $image );
            }
            public function set_t__include( $t__include ){
                $this->t__include = $t__include;
            }
            public function add_tourinclude( $tourinclude ){
                array_push($this->t__include, $tourinclude );
            }
        //GETS
            public function get_id_tour(){
                return $this->id_tour;
            }
            public function get_name(){
                return $this->name;
            }
            public function get_description(){
                return $this->description;
            }
            public function get_cover(){
                return $this->cover;
            }
            public function get_price(){
                return $this->price;
            }
            public function get_schedule(){
                return $this->schedule;
            }
            public function get_image(){
                return $this->image;
            }
            public function get_imageAt($i){
                //var_dump($this->image);
                return $this->image[$i];
            }
            public function get_t__include(){
                return $this->t__include;
            }
    }
    

?>