<?php
namespace GH\ActivityStreamBundle\Model;

/**
 * For full & complete detail
 * @see http://activitystrea.ms/specs/json/schema/activity-schema.html
 * @author ghaliano
 *
 */
final class Verb{
			
	/**
	 * Indicates that the actor has added the object to the target. 
	 * For instance, adding a photo to an album. 
	 */
	const ADD = 'add';

	/**
	 * Indicates that the actor has canceled the object. 
	 * For instance, canceling a calendar event.
	 */
	const CANCEL = 'cancel';

	/**
	 * Indicates that the actor has closed the object. 
	 * For instance, the object could represent a ticket being tracked in an issue management system. 
	 */
	const CLOSE = 'close';

	/**
	 * Indicates that the actor has confirmed or agrees with the object. 
	 * For instance, a software developer might confirm an issue reported against a product. 
	 */
	const CONFIRM = 'confirm';

	/**
	 * Indicates that the actor has created the object. 
	 */
	const CREATE = 'create';

	/**
	 * Indicates THAT the actor has deleted the object. 
	 * This implies, but does not require, the permanent destruction of the object. 
	 */
	const DELETE = 'delete';

	/**
	 * Indicates that the actor began following the activity of the object. 
	 * In most cases, the objectType will be a "person", 
	 * but it can potentially be of any type that can sensibly generate activity. 
	 * Processors MAY ignore (silently drop) successive identical "follow" activities. 
	 */
	const FOLLOW = 'follow';

	/**
	 * Indicates that the actor has become a member of the object. 
	 * This specification only defines the meaning of this verb when the object 
	 * of the Activity has an objectType of group, though implementors 
	 * need to be prepared to handle other types of objects. 
	 */
	const JOIN = 'join';

	/**
	 * Indicates that the actor marked the object as an item of special interest. 
	 * The "like" verb is considered to be an alias of "favorite". 
	 * The two verb are semantically identical. 
	 */
	const LIKE = 'like';

	/**
	 * Indicates that the actor has scheduled the object. 
	 * For instance, scheduling a meeting. 
	 */
	const SCHEDULE = 'schedule';

	/**
	 * Indicates that the actor has sent the object. 
	 * If a target is specified, it indicates the entity to which the object was sent. 
	 */
	const SEND = 'send';

	/**
	 * Indicates that the actor has called out the object to readers. 
	 * In most cases, the actor did not create the object being shared, 
	 * but is instead drawing attention to it. 
	 */
	const SHARE = 'share';

	/**
	 * Indicates that the actor has removed 
	 * the object from the collection of liked items. 
	 */
	const UNLIKE = 'unlike';

	/**
	 * The "update" verb indicates that the actor has modified the object. 
	 * Use of the "update" verb is generally reserved to indicate 
	 * modifications to existing objects or data such as changing an existing 
	 * user's profile information. 
	 */
	const UPDATE = 'update';
}