  <?php
class ResponseDto {
    
    const INVALID_USER = 'Wrong Username or Password';
  private $success;
  private $errorcode;
  private $errorMessage;
  private $text;

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }
}
?>
