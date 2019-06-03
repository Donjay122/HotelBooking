<?php











class Reservation {
    public $firstname , $lastname , $email , $hotel  , $rate , $total , $days , $reference , $status;
    
    function __construct(){
       $this->firstname = $_SESSION['firstname'] ;
       $this->lastname = $_SESSION['lastname'];
       $this->email = $_SESSION['email'];
       $this->hotel = $_SESSION['hotel'];
       $this->days = date_diff(date_create($_SESSION['depart']) , date_create($_SESSION['return']));
       $this->days = $this->days->format('%a');
    }
    
    function getRate_Total_Reference($hotelname){
        switch($hotelname){
                
	case 'Codespace Inn':
		$this->rate = 500; 
        $this->total = $this->rate * $this->days;
		$this->reference = $_SESSION['reference'] = "#CD".RAND(1000 , 5000)."BK";
		break;
	
	case 'Hotels Connect':
		$this->rate = 450;
        $this->total = $this->rate * $this->days;
		$this->reference = $_SESSION['reference'] = "#HC".RAND(1000 , 5000)."BK";
		break;

	case 'Lodgers':
		$this->rate = 300;
        $this->total = $this->rate * $this->days;
		$this->reference = $_SESSION['reference'] = "#LG".RAND(1000 , 5000)."BK";
		break;
}       
}
    
    function writeToDatabase($connection){
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
        $this->email = $_POST['email'];
        $this->hotel = $_POST['hotel'];
        $this->days = $_POST['day'];
        $this->total = $_POST['total'];
        
        
        $sql = "INSERT INTO ayodeji_hotel_reservation(customer_name , email , hotel_name , number_of_days , total_price )
         VALUES ('$this->firstname  $this->lastname' , '$this->email' , '$this->hotel' , '$this->days' , '$this->total')";
            
        $connection->query($sql);
        return true;
        }
}































?>