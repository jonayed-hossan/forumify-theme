<?
namespace phpTestPack{

class TestClass {
public function __construct(){
print("heyy you");
}
  public function doTest(){
    echo __CLASS__, time(), "Ok";
  }
}
  
}
