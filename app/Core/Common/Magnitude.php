<?php

namespace App\Core\Common;

/**
 * A type that supports the comparative operations, such as <,>,=
 * 
 * @deprecated No longer used by internal code and not recommended.
 * @author Arthur Mauricio Delgadillo <amd11dot4@gmail.com>
 * @see http://martinfowler.com/books/ap.html  Martin Fowler - Fundamental Types
 * 
 */
abstract class Magnitude {
    
    public abstract function isLowerThan(Magnitude $magnitude);
    
    public function isHigherThan(Magnitude $magnitude){
        return ! ($this->isLowerThan($magnitude) || $this->equalsTo($magnitude));
    }
    
    public abstract function equalsTo(Magnitude $magnitude);
}