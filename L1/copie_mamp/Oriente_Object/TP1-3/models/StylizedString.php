<?php 
    class StylizedString{
        private $myString = "coucou";

        public function bold()
        {
            return "<b> {$this->myString}</b>";
        }
        public function italic()
        {
            return "<i>  {$this->myString}</i>";
        }
        public function underline()
        {
            return "<u> {$this->myString}</u>";
        }
        public function uppercase()
        {
            return "<span style = 'text-transform: uppercase'> {$this->myString}</span>";
        }
    }

?>