<?php

final class PhabricatorNuanceEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Work' => 'Work',
      'Update or route an item.' => 'Update or route an item.',
      'Removed Milestone: %s' => 'Removed Milestone: %s',
      'Edit Queue' => 'Edit Queue',
      '%s set a property on this item.' => '%s set a property on this item.',
      'Phabricator Form' => 'Phabricator Form',
      'Unassigned: %s' => 'Unassigned: %s',
      '%s changed the default queue for this source from %s to %s.' => '%s changed the default queue for this source from %s to %s.',
      'This source ("%s") does not have a "%s" cursor. Available cursors: %s.' => 'This source ("%s") does not have a "%s" cursor. Available cursors: %s.',
      'Branch %s' => 'Branch %s',
      'GitHub Event' => 'GitHub Event',
      'Default edit policy for newly created sources.' => 'Default edit policy for newly created sources.',
      'Edit Nuance Source Configurations' => 'Edit Nuance Source Configurations',
      'No sources found.' => 'No sources found.',
      'Name of the queue.' => 'Name of the queue.',
      'Executing' => 'Executing',
      '(Use --cursor to import only a particular cursor.)' => '(Use --cursor to import only a particular cursor.)',
      'Unknown Event Type ("%s")' => 'Unknown Event Type ("%s")',
      'Nuance Item %d Task' => 'Nuance Item %s Task',
      'No item exists with PHID "%s".' => 'No item exists with PHID "%s".',
      'Ref %s' => 'Ref %s',
      'This key has %s remaining API request(s), limit resets in %s second(s).' => 'This key has %s remaining API request(s), limit resets in %s second(s).',
      'GitHub Actor' => 'GitHub Actor',
      'Sources' => 'Sources',
      'All Items' => 'All Items',
      'Pull Request #%d' => 'Pull Request #%s',
      'Manage Queue' => 'Manage Queue',
      '%s applied a "%s" command to this item.' => '%s applied a "%s" command to this item.',
      'Set API poll TTL to +%s second(s) (%s second(s) from now).' => 'Set API poll TTL to +%s second(s) (%s second(s) from now).',
      'View Form' => 'View Form',
      'Source names must not be longer than %s character(s).' => 'Source names must not be longer than %s character(s).',
      'Respecting "%s": waiting for %s second(s) to poll GitHub.' => 'Respecting "%s": waiting for %s second(s) to poll GitHub.',
      'Fetched event "%s".' => 'Fetched event "%s".',
      'Manage Nuance items.' => 'Manage Nuance items.',
      'Source "%s" (of class "%s") returned an invalid value from method "%s": all values must be objects of class "%s".' => 'Source "%s" (of class "%s") returned an invalid value from method "%s": all values must be objects of class "%s".',
      'You do not have permission to manage sources.' => 'You do not have permission to manage sources.',
      'Got a complaint? Complain here! We love complaints.' => 'Got a complaint? Complain here! We love complaints.',
      'Items' => 'Items',
      'Removed Label: %s' => 'Removed Label: %s',
      'Importing all cursors: %s.' => 'Importing all cursors: %s.',
      'Can Manage Sources' => 'Can Manage Sources',
      'Queue %d' => 'Queue %s',
      'No items found.' => 'No items found.',
      'GitHub Raw Event' => 'GitHub Raw Event',
      'Unable to execute command "%s": this command does not have a recognized command implementation.' => 'Unable to execute command "%s": this command does not have a recognized command implementation.',
      'Manage Nuance queues.' => 'Manage Nuance queues.',
      'Import data from a source.' => 'Import data from a source.',
      'Edit Queue: %s' => 'Edit Queue: %s',
      'User %s' => 'User %s',
      'Specify a source with %s.' => 'Specify a source with %s.',
      'Complaint Form' => 'Complaint Form',
      'Content imported via Nuance.' => 'Content imported via Nuance.',
      'Nuance Queues' => 'Nuance Queues',
      'Polling GitHub Repository API endpoint "%s".' => 'Polling GitHub Repository API endpoint "%s".',
      'Source "%s" (of class "%s") returned an import cursor with a missing key from "%s". Each cursor must have a unique, nonempty key.' => 'Source "%s" (of class "%s") returned an import cursor with a missing key from "%s". Each cursor must have a unique, nonempty key.',
      'Create Queue' => 'Create Queue',
      'Default Source View Policy' => 'Default Source View Policy',
      'Unknown Object' => 'Unknown Object',
      'This command implementation("%s") can not apply a command of a different type ("%s").' => 'This command implementation("%s") can not apply a command of a different type ("%s").',
      'Queues must have a name.' => 'Queues must have a name.',
      'No source exists with a name matching "%s".' => 'No source exists with a name matching "%s".',
      'IMPORTANT: This is a very rough prototype.' => 'IMPORTANT: This is a very rough prototype.',
      'Queue Actions' => 'Queue Actions',
      'Edit Nuance Queue Configurations' => 'Edit Nuance Queue Configurations',
      'Specify a item with %s.' => 'Specify a item with %s.',
      'Nuance Sources' => 'Nuance Sources',
      'Choose which item to route.' => 'Choose which item to route.',
      'No item exists with ID "%s".' => 'No item exists with ID "%s".',
      'Queue Empty' => 'Queue Empty',
      'Throw In Trash' => 'Throw In Trash',
      'All Queues' => 'All Queues',
      'Respecting "%s" or minimum poll delay: waiting for %s second(s) to poll GitHub.' => 'Respecting "%s" or minimum poll delay: waiting for %s second(s) to poll GitHub.',
      'This engine is used to edit Nuance sources.' => 'This engine is used to edit Nuance sources.',
      'This queue has no open items which you have permission to work on.' => 'This queue has no open items which you have permission to work on.',
      'Importing cursor "%s" only.' => 'Importing cursor "%s" only.',
      'Default queue.' => 'Default queue.',
      'This command implementation ("%s") can not be applied to an item of type "%s".' => 'This command implementation ("%s") can not be applied to an item of type "%s".',
      'No source exists with PHID "%s".' => 'No source exists with PHID "%s".',
      'Routing' => 'Routing',
      'Event "%s" is previously known.' => 'Event "%s" is previously known.',
      'Expected test file "%s" to contain an input section in JSON, then an expected result section in JSON, with the two sections separated by a line of "~~~~~", but the divider is not present in the file.' => 'Expected test file "%s" to contain an input section in JSON, then an expected result section in JSON, with the two sections separated by a line of "~~~~~", but the divider is not present in the file.',
      '%s renamed this queue from %s to %s.' => '%s renamed this queue from %s to %s.',
      'Unable to sync: no external object PHID.' => 'Unable to sync: no external object PHID.',
      'Import only a particular cursor.' => 'Import only a particular cursor.',
      'Queues' => 'Queues',
      'Begin Work' => 'Begin Work',
      'GitHub Event ID' => 'GitHub Event ID',
      'Manage Nuance sources.' => 'Manage Nuance sources.',
      'Search for sources by name substring.' => 'Search for sources by name substring.',
      'Create Source' => 'Create Source',
      'Tag %s' => 'Tag %s',
      'Source %d' => 'Source %s',
      '%s renamed this source from %s to %s.' => '%s renamed this source from %s to %s.',
      'Nuance Items' => 'Nuance Items',
      'Nuance' => 'Nuance',
      'Complaint' => 'Complaint',
      'Throw in Trash' => 'Throw in Trash',
      'Received a 304 Not Modified from GitHub, no new events.' => 'Received a 304 Not Modified from GitHub, no new events.',
      'Owners of an item can always edit it.' => 'Owners of an item can always edit it.',
      'This source ("%s") does not expose import cursors.' => 'This source ("%s") does not expose import cursors.',
      'Item %d' => 'Item %s',
      'ETag for this request was "%s".' => 'ETag for this request was "%s".',
      'Imported As' => 'Imported As',
      'Create a web form that submits into a Nuance queue.' => 'Create a web form that submits into a Nuance queue.',
      'Choose Source Type' => 'Choose Source Type',
      'Browse Queues' => 'Browse Queues',
      'Name of the source.' => 'Name of the source.',
      'GitHub Event URI' => 'GitHub Event URI',
      'Wrong Queue' => 'Wrong Queue',
      'Sources must have a name.' => 'Sources must have a name.',
      'Type a queue name...' => 'Type a queue name...',
      '%s rerouted this item from %s to %s.' => '%s rerouted this item from %s to %s.',
      'Owners of an item can always view it.' => 'Owners of an item can always view it.',
      'Raw Event' => 'Raw Event',
      'There is no Nuance item with PHID "%s".' => 'There is no Nuance item with PHID "%s".',
      'All Sources' => 'All Sources',
      'Exception while decoding test data for test "%s".' => 'Exception while decoding test data for test "%s".',
      'You are trying to act on this item from the wrong queue: it is currently in a different queue.' => 'You are trying to act on this item from the wrong queue: it is currently in a different queue.',
      'Unlocked' => 'Unlocked',
      '%s changed the status of this item from %s to %s.' => '%s changed the status of this item from %s to %s.',
      'This item does not support the specified command ("%s").' => 'This item does not support the specified command ("%s").',
      'High-Volume Task Queues' => 'High-Volume Task Queues',
      'Default view policy for newly created sources.' => 'Default view policy for newly created sources.',
      'Import to Maniphest' => 'Import to Maniphest',
      'This source has no input cursors.' => 'This source has no input cursors.',
      'Command Not Supported' => 'Command Not Supported',
      'Choose which source to import.' => 'Choose which source to import.',
      'Edit Source' => 'Edit Source',
      'Source "%s" (of class "%s") returned two cursors from method "%s" with the same key ("%s"). Each cursor must have a unique key.' => 'Source "%s" (of class "%s") returned two cursors from method "%s" with the same key ("%s"). Each cursor must have a unique key.',
      'Pushed: %s' => 'Pushed: %s',
      'No queues found.' => 'No queues found.',
      'Issue #%d' => 'Issue #%s',
      'Pending Commands' => 'Pending Commands',
      'You must choose a source type.' => 'You must choose a source type.',
      'More than one source matches "%s". Choose a narrower query, or use an ID or PHID to select a source. Matching sources: %s.' => 'More than one source matches "%s". Choose a narrower query, or use an ID or PHID to select a source. Matching sources: %s.',
      'Queue' => 'Queue',
      'View Raw Event' => 'View Raw Event',
      'This source ("%s") does not have any import cursors.' => 'This source ("%s") does not have any import cursors.',
      '%s reassigned this item from %s to %s.' => '%s reassigned this item from %s to %s.',
      'Queue names must not be longer than %s character(s).' => 'Queue names must not be longer than %s character(s).',
      'This engine is used to edit Nuance queues.' => 'This engine is used to edit Nuance queues.',
      'GitHub %s %s (%s)' => 'GitHub %s %s (%s)',
      'Watched' => 'Watched',
      'Issued' => 'Issued',
      'Import issues and pull requests from a GitHub repository.' => 'Import issues and pull requests from a GitHub repository.',
      'This item type ("%s", of class "%s") can not update items.' => 'This item type ("%s", of class "%s") can not update items.',
      'Added Milestone: %s' => 'Added Milestone: %s',
      'GitHub Repository' => 'GitHub Repository',
      'Default Source Edit Policy' => 'Default Source Edit Policy',
      'Trying to apply a command to the wrong item!' => 'Trying to apply a command to the wrong item!',
      'Manage Item' => 'Manage Item',
      'Reload from GitHub' => 'Reload from GitHub',
      'Unable to sync: failed to load object "%s".' => 'Unable to sync: failed to load object "%s".',
      'View Item' => 'View Item',
      'Nuance Console' => 'Nuance Console',
      'Event Properties' => 'Event Properties',
      'Sources must have a default queue.' => 'Sources must have a default queue.',
      'Added Label: %s' => 'Added Label: %s',
      'Specify the ID or PHID of an item to update. Parameter "%s" is not an ID or PHID.' => 'Specify the ID or PHID of an item to update. Parameter "%s" is not an ID or PHID.',
      'Submit Complaint' => 'Submit Complaint',
      'Edit Source: %s' => 'Edit Source: %s',
      'Expected test file "%s" to contain exactly two sections, but it has more than two sections.' => 'Expected test file "%s" to contain exactly two sections, but it has more than two sections.',
      'Not in Queue' => 'Not in Queue',
      'Import Cursor' => 'Import Cursor',
      'No source exists with ID "%s".' => 'No source exists with ID "%s".',
      'Default Queue' => 'Default Queue',
    );
  }

}