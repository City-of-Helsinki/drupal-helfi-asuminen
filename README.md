# City of Helsinki - Asuminen Drupal project

The Asuminen instance provides information related to living accommodations in Helsinki.

## Environments

Env | Branch | Drush alias | URL
--- | ------ | ----------- | ---
development | * | - | http://helfi-asuminen.docker.so/
production | main | @main | https://hel.fi/fi/asuminen

## Requirements

You need to have these applications installed to operate on all environments:

- [Docker](https://github.com/druidfi/guidelines/blob/master/docs/docker.md)
- [Stonehenge](https://github.com/druidfi/stonehenge)
- For the new person: Your SSH public key needs to be added to servers

## Create and start the environment

For the first time (new project):

``
$ make new
``

And following times to start the environment:

``
$ make up
``

NOTE: Change these according of the state of your project.

## Login to Drupal container

This will log you inside the app container:

```
$ make shell
```

## Site specific features

### IBM Watson chat

The Asuminen site features the IBM Watson Chatbot on multiple pages. You can configure the chatbot on the block layout
page (`admin/structure/block`). More documentation about the chatbot is available in [Confluence](https://helsinkisolutionoffice.atlassian.net/wiki/spaces/HEL/pages/8145469986/IBM+Chat+App+Drupal+integration),
and the code for the Drupal block can be found [here](https://github.com/City-of-Helsinki/drupal-helfi-platform-config/blob/main/src/Plugin/Block/IbmChatApp.php).
