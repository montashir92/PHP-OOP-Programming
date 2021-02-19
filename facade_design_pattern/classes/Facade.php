<?php

	class Facade{
		
		public function findApartments($place, $divID){
			$apfinder = new ApartmentFinder();
			$geolocator = new GeoLocator();
			$gmap = new GoogleMap();
			
			$apertments = $apfinder->locateApartments($place);
			foreach($apertments as $apertment){
				$locations[] = $geolocator->getLocations($apertment);
			}
			$gmap->initialize();
			$gmap->drawLocation($location);
			$gmap->dispatch($divID);
		}
	}
?>