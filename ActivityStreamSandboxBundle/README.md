ActivityStreamSandboxBundle
========================

Welcome to the ActivityStreamSandboxBundle, a simple project management system 
to show you how to implement GH\ActivityStreamBundle

1) Installing the Bundle
----------------------------------

When it comes to installing this sandbox, you have the
following options.

### Use Composer (*recommended*)

### Download an Archive File

2) push activity

@see ActivityStreamSandboxBundle\Controller\ProjectController.php::createAction

$activity = new Activity();

$activity

->setTitle($entity->getTitle())

->setSummary($entity->getSummary())

->setVerb(Verb::ADD)

->setActor($serializer->serialize($user->normalizeAsObject(), 'json'))

->setTarget($serializer->serialize($user->normalizeAsObject(), 'json'))

->setObject($serializer->serialize($entity->normalizeAsObject(), 'json'));
