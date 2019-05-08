<?php

namespace Site;

class CriacaoCafe
{
    public static function create($tipocafe)
    {
		
        switch ($tipocafe) {
			  case "Curto":
				return new Curto();
			  case "Pingado":
				return new Pingado();
			   case "Expresso":
				return new Expresso();
	}
		
    }
}
