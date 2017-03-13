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


class AdminUserServiceClient implements \Ridibooks\Cms\Thrift\AdminUser\AdminUserServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function getAllAdminUserArray()
  {
    $this->send_getAllAdminUserArray();
    return $this->recv_getAllAdminUserArray();
  }

  public function send_getAllAdminUserArray()
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllAdminUserArray_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getAllAdminUserArray', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getAllAdminUserArray', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getAllAdminUserArray()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllAdminUserArray_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllAdminUserArray_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("getAllAdminUserArray failed: unknown result");
  }

  public function getUser($userId)
  {
    $this->send_getUser($userId);
    return $this->recv_getUser();
  }

  public function send_getUser($userId)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getUser_args();
    $args->userId = $userId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getUser', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getUser', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getUser()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getUser_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getUser_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("getUser failed: unknown result");
  }

  public function getAdminUserTag($userId)
  {
    $this->send_getAdminUserTag($userId);
    return $this->recv_getAdminUserTag();
  }

  public function send_getAdminUserTag($userId)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserTag_args();
    $args->userId = $userId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getAdminUserTag', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getAdminUserTag', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getAdminUserTag()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserTag_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserTag_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("getAdminUserTag failed: unknown result");
  }

  public function getAdminUserMenu($userId)
  {
    $this->send_getAdminUserMenu($userId);
    return $this->recv_getAdminUserMenu();
  }

  public function send_getAdminUserMenu($userId)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserMenu_args();
    $args->userId = $userId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getAdminUserMenu', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getAdminUserMenu', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getAdminUserMenu()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserMenu_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAdminUserMenu_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("getAdminUserMenu failed: unknown result");
  }

  public function getAllMenuIds($userId)
  {
    $this->send_getAllMenuIds($userId);
    return $this->recv_getAllMenuIds();
  }

  public function send_getAllMenuIds($userId)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllMenuIds_args();
    $args->userId = $userId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getAllMenuIds', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getAllMenuIds', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getAllMenuIds()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllMenuIds_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_getAllMenuIds_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("getAllMenuIds failed: unknown result");
  }

  public function updateMyInfo($userId, $name, $team, $isUse, $passwd)
  {
    $this->send_updateMyInfo($userId, $name, $team, $isUse, $passwd);
    return $this->recv_updateMyInfo();
  }

  public function send_updateMyInfo($userId, $name, $team, $isUse, $passwd)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updateMyInfo_args();
    $args->userId = $userId;
    $args->name = $name;
    $args->team = $team;
    $args->isUse = $isUse;
    $args->passwd = $passwd;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'updateMyInfo', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('updateMyInfo', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_updateMyInfo()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updateMyInfo_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updateMyInfo_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("updateMyInfo failed: unknown result");
  }

  public function updatePassword($userId, $plainPassword)
  {
    $this->send_updatePassword($userId, $plainPassword);
    return $this->recv_updatePassword();
  }

  public function send_updatePassword($userId, $plainPassword)
  {
    $args = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updatePassword_args();
    $args->userId = $userId;
    $args->plainPassword = $plainPassword;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'updatePassword', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('updatePassword', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_updatePassword()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updatePassword_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Ridibooks\Cms\Thrift\AdminUser\AdminUserService_updatePassword_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->userException !== null) {
      throw $result->userException;
    }
    if ($result->systemException !== null) {
      throw $result->systemException;
    }
    throw new \Exception("updatePassword failed: unknown result");
  }

}


