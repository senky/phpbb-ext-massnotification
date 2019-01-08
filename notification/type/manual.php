<?php
/**
 *
 * Mass Notification. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace senky\massnotification\notification\type;

class manual extends \phpbb\notification\type\base
{
	/**
	 * {@inheritDoc}
	 */
	public function get_type()
	{
		return 'senky.massnotification.notification.type.manual';
	}

	/**
	 * {@inheritDoc}
	 */
	public function is_available()
	{
		return false;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_item_id($data)
	{
		return $data['notification_id'];
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_item_parent_id($data)
	{
		return 0;
	}

	/**
	 * {@inheritDoc}
	 */
	public function find_users_for_notification($data, $options = array())
	{
		$users = [];
		foreach ($data['user_ids'] as $user)
		{
			$users[$user] = ['notification.method.board'];
		}
		return $users;
	}

	/**
	 * {@inheritDoc}
	 */
	public function users_to_query()
	{
		return [];
	}

	/**
	 * {@inheritDoc}
	 */
	public function get_title()
	{
		return '<strong>' . $this->get_data('title') . '</strong>';
	}

	/**
	 * {@inheritDoc}
	 */
	public function get_reference()
	{
		return html_entity_decode($this->get_data('message'));
	}

	/**
	 * {@inheritDoc}
	 */
	public function get_url()
	{
		return $this->get_data('url');
	}

	/**
	 * {@inheritDoc}
	 */
	public function get_email_template()
	{
		return false;
	}

	/**
	 * {@inheritDoc}
	 */
	public function get_email_template_variables()
	{
		return [];
	}

	/**
	* {@inheritdoc}
	*/
	public function create_insert_array($data, $pre_create_data = [])
	{
		$this->set_data('notification_id', $data['notification_id']);
		$this->set_data('title', $data['title']);
		$this->set_data('message', $data['message']);
		$this->set_data('url', $data['url']);

		parent::create_insert_array($data, $pre_create_data);
	}
}
