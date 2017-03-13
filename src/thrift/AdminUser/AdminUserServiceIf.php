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


/**
 * AdminUser 서비스
 */
interface AdminUserServiceIf {
  /**
   * @return \Ridibooks\Cms\Thrift\AdminUser\AdminUser[] AdminUserCollection 엔티티
   * 
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function getAllAdminUserArray();
  /**
   * @param string $userId
   * @return \Ridibooks\Cms\Thrift\AdminUser\AdminUser AdminUser 엔티티
   * 
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function getUser($userId);
  /**
   * @param string $userId
   * @return int[]
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function getAdminUserTag($userId);
  /**
   * @param string $userId
   * @return int[]
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function getAdminUserMenu($userId);
  /**
   * @param string $userId
   * @return int[]
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function getAllMenuIds($userId);
  /**
   * @param string $userId
   * @param string $name
   * @param string $team
   * @param bool $isUse
   * @param string $passwd
   * @return bool
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function updateMyInfo($userId, $name, $team, $isUse, $passwd);
  /**
   * @param string $userId
   * @param string $plainPassword
   * @return bool
   * @throws \Ridibooks\Cms\Thrift\Errors\UserException
   * @throws \Ridibooks\Cms\Thrift\Errors\SystemException
   */
  public function updatePassword($userId, $plainPassword);
}


