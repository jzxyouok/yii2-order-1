<?php
namespace pistol88\order\logic;

use pistol88\order\interfaces\User;

class SetClient extends \yii\base\Component
{
    public $order;
    
    protected $user;
    
    public function __construct(User $user, $config = [])
    {
        $this->user = $user;
        
        return parent::__construct($config);
    }
    
    public function execute()
    {
        $this->order->user_id = $this->user->id;
        $this->order->save();
        
        return true;
    }
}