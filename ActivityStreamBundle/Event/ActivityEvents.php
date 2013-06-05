<?php
namespace GH\ActivityStreamBundle\Event;

final class ActivityEvents
{
	/**
	 * The activity.add event is thrown each time an activity is created
	 * in the system.
	 *
	 * @var string
	 */
	const ACTIVITY_ADD = 'activity.add';

	/**
	 * The activity.add event is thrown each time an activity is created
	 * in the system.
	 *
	 * @var string
	 */
	const ACTIVITY_UPDATE = 'activity.update';

	/**
	 * The activity.delete event is thrown each time an activity is created
	 * in the system.
	 *
	 * @var string
	 */
	const ACTIVITY_DELETE = 'activity.delete';
}