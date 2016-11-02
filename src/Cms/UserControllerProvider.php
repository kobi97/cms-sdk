<?php
namespace Ridibooks\Platform\Cms;

use Ridibooks\Platform\Cms\Auth\AdminUserService;
use Ridibooks\Platform\Cms\Auth\LoginService;
use Ridibooks\Platform\Common\Base\JsonDto;
use Ridibooks\Platform\Common\StringUtils;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class UserControllerProvider implements ControllerProviderInterface
{
	public function connect(Application $app)
	{
		/** @var ControllerCollection $controllers */
		$controllers = $app['controllers_factory'];

		$controllers->get('me', [$this, 'getMyInfo']);
		$controllers->post('me', [$this, 'updateMyInfo']);

		$controllers->get('comm/user_list.ajax', [$this, 'userList']);

		return $controllers;
	}

	public function getMyInfo(CmsApplication $app)
	{
		$user_info = AdminUserService::getUser(LoginService::GetAdminID());

		return $app->render('me.twig',
			[
				'user_info' => $user_info
			]
		);
	}

	public function updateMyInfo(CmsApplication $app, Request $request)
	{
		$name = $request->get('name');
		$team = $request->get('team');
		$is_use = $request->get('is_use');

		try {
			$passwd = '';
			$new_passwd = $request->get('new_passwd');
			$chk_passwd = $request->get('chk_passwd');
			if (!StringUtils::isEmpty($new_passwd)) {
				if ($new_passwd != $chk_passwd) {
					throw new \Exception('변경할 비밀번호가 일치하지 않습니다.');
				}
				$passwd = $new_passwd;
			}
			AdminUserService::updateMyInfo($name, $team, $is_use, $passwd);
			$app->addFlashInfo('성공적으로 수정하였습니다.');
		} catch (\Exception $e) {
			$app->addFlashError($e->getMessage());
		}

		$subRequest = Request::create('/me');
		return $app->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
	}

	public function userList(CmsApplication $app)
	{
		$jsonDto = new JsonDto();

		try {
			$jsonDto->data = AdminUserService::getAllAdminUserArray();
		} catch (\Exception $e) {
			$jsonDto->setException($e);
		}

		return $app->json((array)$jsonDto);
	}
}
