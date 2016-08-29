<!-- 

1.$var ve &$var ; var-lari link kimi funksiyalarina teyin etmek olar.
Meselen:

|.
function foo(&$var){
	$var++;
}
$a=5;
foo($a);
//->6;

||.
$first = "Привет"; 
$second = $first; 
$first = "Приветствия";  // $second deyishmir

$person = "Ты"; 
$pname = &$person; 
$person = "Лена";  //  $person ve $pname deyishir;

print ("$first $person и добро пожаловать\n"); 
print ("$second $pname и добро пожаловать\n"); 

2.$var ve $$var
Qeyd olunan suali exaple ile arashdiraq:
$var1=5;
$var2='var1'
//->$$var2=5; 

$$var - vozvrashayet znaceniye peremennoy s imenem , ukazannim v peremennoy "var";

3. eqer var teyin olnubsa -> true, yox-> false;

4.serialize() -Saxlanilan deyerin temsili yaradir;
PHP-nin valuelarin kocurulmesi ve saxlamasi zamaninda onlarin sturturun itirilmesinin qarshisini alir.
Example:

echo '<pre>'
$animals=array('cat','dog','fish');

var_dump($single);
echo serialize($single);

//->a:3:(i:0;s:3:'cat'; i:1;s:3:'dog';i:2;s:4:'fish');a:items -lerin sayi,i:item-lerim siralamaya gore deyer, s:stirde ne geder herf var;


5.
   $a = 5;
function foo(&$var)
{
    $var++;
    echo $var;
}
function &bar()
{
   return $a;
}
 $foo1 = foo(bar());
 //->1 qaytarir, ola biler 1 true ifade edir. (Bilmirem niye);


6.

6.
$juice = "apple";
echo "He drank some $juice juice.";

Əlavə dirnaqlar işlətmədən ekrana:
      “He drank some apple juice.” yazdırın


7.
unlink() və unset() fergi:
unset()-(teqdim olunan)variable -larinin silinmesine istifade olunur.
unlink()-fayli silinmesine istifade olunur.

8.


9.
 echo serialize($word);
 //-> echo serialize($word);


10.
$x = true and false;
       var_dump($x);
Output ne olacaq ve ne ucun?
//-> true; eqer

$x = false and true;
       var_dump($x);

       //->false gaytiracaq. yaqin birinci ne gelirse onu qaytarir.
		
		qeyd olunur ki $x hem false hem de(ve) true gaytarir.


       eqer 
        $x = (true and false);
       var_dump($x);
       //-> false qaytiracaq JS kimi.

11.


	$x = NULL;
     if('0xFF' == 255) {
    $x = (int)'0xFF';
}      
echo $x;

//-> 0 olacaq (internetde baxdim, bool(false)- kimi oxunur,qeyd olunan shertlere uygun gelmir.)



12. 

$i = 016;
    echo $i / 2;

    //cavab -7 (internetde baxdim,orda qiyd olunan izahati (iki setirli basha dushmek bir az cetindir));


 13.final - yalniz klasslara ve metodlara qeyd etmek olar. Qeyd etdiyi zaman ondan extdend etmek olmur. Extend olundugu zaman Fatal errir kimi teqdim olunur.

 class BaseClass {
   public function test() {
       echo "Вызван метод BaseClass::test()\n";
   }
   
   final public function moreTesting() {
       echo "Вызван метод BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "Вызван метод ChildClass::moreTesting()\n";
   }
}  ;


Satic metodlari adi var-lara ve funksiyalara oxshayir Cagirish zamani obyet yaratmaq lazim gelmir.
Cagirish <<::>>.


14.

15.
protected $protected = 'Qurunan';
    private $private = 'Baglanan';


    Protected- epozvolyayet polucit dostup k tekushemu klassu i nasleduyemim klassam;
    Nikakomu vneshnemu kodu dostup k nim ne prdstavlyayetsa;

    Private - ogranicivayet oblast vidimosti tak,cto dostup k clenu klassa imeet tolko klass, v kotorom on onyavlen.

    class human {
    private $age = 5;
    function say() {
      // внутри класса доступ к закрытым данным есть
      echo "$this->age";
    }   
  }
   
  $obj = new human;
   
  // напрямую из вызывающей программы доступа к закрытым данным нет
  echo "$obj->age";  // Ошибка! доступ закрыт!
   
  // однако с помощью метода можно выводить закрытые данные
  $obj->say();       // Допустимо


16. obespecivayet mnojestvennoye nasledovaniye.Ego tolko mojno ispolzovat v drugom klasse.

17.PHP-de Object-Oriented  yolu ile mysql-e nece qosulur?



class DB {
	
	protected $db_name = 'databasename';
	protected $db_user = 'databaseuser';
	protected $db_pass = 'databasepassword';
	protected $db_host = 'databasehost';
	
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	
		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
		}
		return true;
		
	}

}
19.

function calc($a,$b,$math){
	
	if($math=='vur'){
		echo $a*$b;
	}
	elseif($math=='bol'){
	
		echo $a/$b;
	}
	elseif($math=='cix'){
		echo $a-$b;
	}
	elseif($math=='ustegel'){
	
		echo $a+Bb
	}
};
calc($a,$b,$math);

22. $GLOBALS haqqında araşdırma edib kiçik məlumat yazın.
Her erde gurunur, Supergloballara ayiddir.

Meselen:
$a=1;
$b=3;

function Sum(){
	$GLOBAL['b']=$GLOBAL['a']+$GLOBAL['b'];
}
Sum();
echo $b;

23. Bir form-unuz var və həmin form daxilində şəkil yükləyirsiniz. Şəkil yüklənən zaman xəta baş verir(error). Həmin xəta barədə necə məlumat almaq olar ?
set_error_handler() ile;

27. 
 PHP-de error type-lari arasdirin.
 1.Fatal sehvler.Skriptin ishi dayandirilir.
E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR.
2.Fatal olmayan
Duzele bilen sehvler Skriptin ishi dayandirilmir.
E_WARNING, E_NOTICE, E_CORE_WARNING, E_COMPILE_WARNING, E_USER_WARNING, E_USER_NOTICE, E_STRICT, E_DEPRECATED, E_USER_DEPRECATED.
3.Qarishiq sehvler. 
E_USER_ERROR, E_RECOVERABLE_ERROR.



-->

<?php 



    

?>