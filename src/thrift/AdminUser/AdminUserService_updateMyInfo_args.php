<?php
namespace Ridibooks\Cms\Thrift\AdminUser;
/**
 * Autogenerated by Thrift Compiler (1.0.0-dev)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class AdminUserService_updateMyInfo_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $team = null;
  /**
   * @var bool
   */
  public $isUse = null;
  /**
   * @var string
   */
  public $passwd = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'team',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'isUse',
          'type' => TType::BOOL,
          ),
        4 => array(
          'var' => 'passwd',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['team'])) {
        $this->team = $vals['team'];
      }
      if (isset($vals['isUse'])) {
        $this->isUse = $vals['isUse'];
      }
      if (isset($vals['passwd'])) {
        $this->passwd = $vals['passwd'];
      }
    }
  }

  public function getName() {
    return 'AdminUserService_updateMyInfo_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->team);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isUse);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->passwd);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AdminUserService_updateMyInfo_args');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->team !== null) {
      $xfer += $output->writeFieldBegin('team', TType::STRING, 2);
      $xfer += $output->writeString($this->team);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isUse !== null) {
      $xfer += $output->writeFieldBegin('isUse', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isUse);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->passwd !== null) {
      $xfer += $output->writeFieldBegin('passwd', TType::STRING, 4);
      $xfer += $output->writeString($this->passwd);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

