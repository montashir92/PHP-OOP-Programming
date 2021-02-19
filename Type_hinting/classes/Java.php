
//type hinting in php.

<?php
    class Java{
		public $fromphp;
        function __construct(Php $value){
            $this->fromphp = $value;
			$this->fromphp->framework();
			$this->fromphp->cms();
        }
    }
?>