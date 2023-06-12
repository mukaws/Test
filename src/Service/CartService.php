<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService{

    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    

    public function addToCart(int $id) :void {

        $card = $this->requestStack->getSession()->get('cart',[]);

        if(!empty($card[$id])){
            $card[$id]++;
        }
    
        else{
            $card[$id]=1;
        }
        $this->getSession()->set('cart',$card);
        
}
    private function getSession() {
        return $this->requestStack->getSession();
    }
}

?>