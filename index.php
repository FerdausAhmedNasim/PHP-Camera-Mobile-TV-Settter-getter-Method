<?php
abstract class Electronics
{	
	protected $productBrand;

	public function setPdetails($branding)
	{
		$this->productBrand = $branding;
	}
    abstract public function products();
	abstract public function price();
    abstract public function color();
    abstract public function model(); 
}

class Mobile1 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:1,00,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: iPhone X pro max";
    }
}
	

echo "<br>";

$mobile1 = new Mobile1();
$mobile1->setPdetails("Brand: Apple");
echo $mobile1->products()."<br>";
echo $mobile1->price()."<br>";
echo $mobile1->color()."<br>";
echo $mobile1->model()."<br>";


echo"<br>";

class Mobile2 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:78,000 BDT";
	} 
    public function color()
    {
        return "Color: Mate Blue";
    }
    public function model()
    {
        return "Model:Galaxy S22 ULTRA";
    }
}
	

echo "<br>";

$mobile2 = new Mobile2();
$mobile2->setPdetails("Brand: Samsung");
echo $mobile2->products()."<br>";
echo $mobile2->price()."<br>";
echo $mobile2->color()."<br>";
echo $mobile2->model()."<br>";

echo "<br>";

class Mobile3 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:25,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: Nokia N70";
    }
}

echo "<br>";

$mobile3 = new Mobile3();
$mobile3->setPdetails("Brand: Nokia");
echo $mobile3->products()."<br>";
echo $mobile3->price()."<br>";
echo $mobile3->color()."<br>";
echo $mobile3->model()."<br>";

echo "<br>";

class Television1 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:1,20,000 BDT";
	} 
    public function color()
    {
        return "Color:Mate Black";
    }
    public function model()
    {
        return "Model: SM2024";
    }
}

$television1 = new Television1();
$television1->setPdetails("Brand: Sony Rangs");
echo $television1->products()."<br>";
echo $television1->price()."<br>";
echo $television1->color()."<br>";
echo $television1->model()."<br>";


echo "<br>";

class Television2 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:85,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: RSM2024";
    }
}

$television2 = new Television2();
$television2->setPdetails("Brand: Samsung");
echo $television2->products()."<br>";
echo $television2->price()."<br>";
echo $television2->color()."<br>";
echo $television2->model()."<br>";

echo "<br>";

class Television3 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:55,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: PSM2024";
    }
}

$television3 = new Television3();
$television3->setPdetails("Brand: Panasonic");
echo $television3->products()."<br>";
echo $television3->price()."<br>";
echo $television3->color()."<br>";
echo $television3->model()."<br>";

echo "<br>";


class Camera1 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:1,24,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: CND-002024";
    }
}

$camera1 = new Camera1();
$camera1->setPdetails("Brand: Canon");
echo $camera1->products()."<br>";
echo $camera1->price()."<br>";
echo $camera1->color()."<br>";
echo $camera1->model()."<br>";

echo "<br>";

class Camera2 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:75,000 BDT";
	} 
    public function color()
    {
        return "Color:Light Black";
    }
    public function model()
    {
        return "Model: SH-0042024";
    }
}

$camera2 = new Camera2();
$camera2->setPdetails("Brand: Sharp");
echo $camera2->products()."<br>";
echo $camera2->price()."<br>";
echo $camera2->color()."<br>";
echo $camera2->model()."<br>";

echo "<br>";

class Camera3 extends Electronics
{
    public function products()
    {
        $brand = $this->productBrand;
		return $brand;
    }
	public function price()
	{
		return "Price:45,000 BDT";
	} 
    public function color()
    {
        return "Color: Black";
    }
    public function model()
    {
        return "Model: SN-G82024";
    }
}

$camera3 = new Camera3();
$camera3->setPdetails("Brand: Sony");
echo $camera3->products()."<br>";
echo $camera3->price()."<br>";
echo $camera3->color()."<br>";
echo $camera3->model()."<br>";

echo "<br>";









?>
