<?php

final class PhabricatorHeraldEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'An object name is required.',
      'Rule passed.' => 'Rule passed.',
      'No object exists by that name.' => 'No object exists by that name.',
      '%s created this rule.' => '%s created this rule.',
      'Rule must have a name.' => 'Rule must have a name.',
      'Invalid Targets' => 'Invalid Targets',
      '(Invalid List)' => '(Invalid List)',
      '(Unknown Action "%s") equals' => '(Unknown Action "%s") equals',
      'Herald field "%s" has unknown standard type "%s".' => 'Herald field "%s" has unknown standard type "%s".',
      'Object rules inherit the edit policies of their objects.' => 'Object rules inherit the edit policies of their objects.',
      'This is an old transcript which uses an obsolete log format. Detailed action information is not available.' => 'This is an old transcript which uses an obsolete log format. Detailed action information is not available.',
      'Applies To' => 'Applies To',
      'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.' => 'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.',
      'The selected content type ("%s") is not recognized by Herald.' => 'The selected content type ("%s") is not recognized by Herald.',
      'Regular expression pair is not a pair!' => 'Regular expression pair is not a pair!',
      'You must %s to a boolean first!' => 'You must %s to a boolean first!',
      'This action has no effect on %s target(s): %s.' => 'This action has no effect on %s target(s): %s.',
      '%s edited this rule.' => '%s edited this rule.',
      'Failed to decode rule data.' => 'Failed to decode rule data.',
      'Unloadable Targets' => 'Unloadable Targets',
      'Unknown reason ("%s").' => 'Unknown reason ("%s").',
      'When all of these conditions are met:' => 'When all of these conditions are met:',
      'all of' => 'all of',
      'lacks bit' => 'lacks bit',
      'Type a Herald rule name...' => 'Type a Herald rule name...',
      'This adapter can not trigger on objects.' => 'This adapter can not trigger on objects.',
      'Rule could not be processed, it was created with a newer version of Herald.' => 'Rule could not be processed, it was created with a newer version of Herald.',
      'The first regexp in the regexp pair, "%s", is not a valid regexp.' => 'The first regexp in the regexp pair, "%s", is not a valid regexp.',
      'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.' => 'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.',
      'This %s rule triggers for %s.' => 'This %s rule triggers for %s.',
      'Expected condition value to be an array.' => 'Expected condition value to be an array.',
      'All Transcripts' => 'All Transcripts',
      'does not contain' => 'does not contain',
      'Invalid Content Type' => 'Invalid Content Type',
      'Run On Host' => 'Run On Host',
      'You must choose a content type for this rule.' => 'You must choose a content type for this rule.',
      'Transcript: %s' => 'Transcript: %s',
      'No Targets' => 'No Targets',
      'This was a dry run to test Herald rules, no actions were executed.' => 'This was a dry run to test Herald rules, no actions were executed.',
      'Rule failed automatically because it is an object rule which is not relevant for this object.' => 'Rule failed automatically because it is an object rule which is not relevant for this object.',
      'Object Rule' => 'Object Rule',
      'Rule Name' => 'Rule Name',
      'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your Phabricator deployment.' => 'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your Phabricator deployment.',
      'Rule failed automatically because it has no conditions.' => 'Rule failed automatically because it has no conditions.',
      'When %s these conditions are met:' => 'When %s these conditions are met:',
      'Object is of wrong type for adapter!' => 'Object is of wrong type for adapter!',
      'Unknown Field: "%s"' => 'Unknown Field: "%s"',
      'This action specifies no targets.' => 'This action specifies no targets.',
      'Take these actions the first time this rule matches:' => 'Take these actions the first time this rule matches:',
      'Forbidden' => 'Forbidden',
      '(All Content Types)' => '(All Content Types)',
      '<Unknown Action "%s">' => '<Unknown Action "%s">',
      'Action: %s' => 'Action: %s',
      'Any condition matched.' => 'Any condition matched.',
      'Global Rule' => 'Global Rule',
      'Do nothing.' => 'Do nothing.',
      'Rule failed automatically because its owner is invalid or disabled.' => 'Rule failed automatically because its owner is invalid or disabled.',
      'Details of this transcript have been garbage collected.' => 'Details of this transcript have been garbage collected.',
      'Herald Rule' => 'Herald Rule',
      'You do not have permission to manage global Herald rules.' => 'You do not have permission to manage global Herald rules.',
      'The second regexp in the regexp pair, "%s", is not a valid regexp.' => 'The second regexp in the regexp pair, "%s", is not a valid regexp.',
      'Edit Attributes' => 'Edit Attributes',
      'Effect type passed to "%s" must be a scalar string.' => 'Effect type passed to "%s" must be a scalar string.',
      'Old Transcript' => 'Old Transcript',
      'Is newly created' => 'Is newly created',
      'Object state prevented rule evaluation.' => 'Object state prevented rule evaluation.',
      'This action has no effect.' => 'This action has no effect.',
      'Prevent' => 'Prevent',
      'exists' => 'exists',
      'You must choose a rule type for this rule.' => 'You must choose a rule type for this rule.',
      'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.' => 'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.',
      'Invalid Action' => 'Invalid Action',
      'Invalid Rule Type' => 'Invalid Rule Type',
      '%s target(s) do not have permission to see this object: %s.' => '%s target(s) do not have permission to see this object: %s.',
      'Conditions' => 'Conditions',
      'Create Notification Rules' => 'Create Notification Rules',
      'The selected rule type ("%s") is not supported by the selected content type ("%s").' => 'The selected rule type ("%s") is not supported by the selected content type ("%s").',
      'Regular expression is not valid!' => 'Regular expression is not valid!',
      'Really archive this rule?' => 'Really archive this rule?',
      'does not exist' => 'does not exist',
      'include all of' => 'include all of',
      'matches regexp' => 'matches regexp',
      'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.' => 'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.',
      'Unknown rule type "%s"!' => 'Unknown rule type "%s"!',
      'This was a dry run, so no actions were taken.' => 'This was a dry run, so no actions were taken.',
      'Show Enabled and Disabled Rules' => 'Show Enabled and Disabled Rules',
      '(All Rule Types)' => '(All Rule Types)',
      'Save Rule' => 'Save Rule',
      '%s disabled this rule.' => '%s disabled this rule.',
      'A personal rule can only be edited by its owner.' => 'A personal rule can only be edited by its owner.',
      'Edit Herald Rule: %s' => 'Edit Herald Rule: %s',
      'Watch for danger!' => 'Watch for danger!',
      'Related Fields' => 'Related Fields',
      'New Action' => 'New Action',
      'Other' => 'Other',
      'No Effect' => 'No Effect',
      'Archive Rule' => 'Archive Rule',
      'Changes triggered by Herald rules.' => 'Changes triggered by Herald rules.',
      'The %s repository is not tracked.' => 'The %s repository is not tracked.',
      'No field with key "%s" is available to Herald adapter "%s".' => 'No field with key "%s" is available to Herald adapter "%s".',
      'Did nothing.' => 'Did nothing.',
      'is myself' => 'is myself',
      'every time' => 'every time',
      'Object Transcript' => 'Object Transcript',
      'Herald Rules' => 'Herald Rules',
      'Create Herald Rule' => 'Create Herald Rule',
      'Disable Rule' => 'Disable Rule',
      'Affects: %s' => 'Affects: %s',
      'Unable to build a new transaction for adapter object; it does not implement "%s".' => 'Unable to build a new transaction for adapter object; it does not implement "%s".',
      'Supporting Applications' => 'Supporting Applications',
      'Transcript %s' => 'Transcript %s',
      '//There are no available Herald events for this object.//' => '//There are no available Herald events for this object.//',
      'does not match regexp' => 'does not match regexp',
      'You have permission to create and manage global rules.' => 'You have permission to create and manage global rules.',
      'Wrong Rule Type' => 'Wrong Rule Type',
      'Not Editable' => 'Not Editable',
      'Content Type' => 'Content Type',
      'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.' => 'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.',
      'This rule is only supposed to be repeated a single time, and it has already been applied.' => 'This rule is only supposed to be repeated a single time, and it has already been applied.',
      'Unknown Action ("%s")' => 'Unknown Action ("%s")',
      'When any of these conditions are met:' => 'When any of these conditions are met:',
      'Utility' => 'Utility',
      'No rules found.' => 'No rules found.',
      'Browse Herald Rules' => 'Browse Herald Rules',
      'No implementation is available for rule "%s".' => 'No implementation is available for rule "%s".',
      'Herald rules will not trigger until tracking is enabled.' => 'Herald rules will not trigger until tracking is enabled.',
      'Create Herald Rule: %s' => 'Create Herald Rule: %s',
      'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.' => 'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.',
      'You must choose an object to associate this rule with.' => 'You must choose an object to associate this rule with.',
      'Take these actions %s this rule matches:' => 'Take these actions %s this rule matches:',
      'Second regular expression is invalid!' => 'Second regular expression is invalid!',
      'Create Rule' => 'Create Rule',
      'No adapter exists for Herald content type "%s".' => 'No adapter exists for Herald content type "%s".',
      'You do not have permission to create or manage global rules.' => 'You do not have permission to create or manage global rules.',
      'Another Herald rule' => 'Another Herald rule',
      'Edit Rule' => 'Edit Rule',
      'any of' => 'any of',
      'Dry Run' => 'Dry Run',
      'Condition references a rule which does not exist!' => 'Condition references a rule which does not exist!',
      'Show Only Enabled Rules' => 'Show Only Enabled Rules',
      'Did Nothing' => 'Did Nothing',
      'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).' => 'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).',
      'No action with key "%s" is available to Herald adapter "%s".' => 'No action with key "%s" is available to Herald adapter "%s".',
      'only the first time' => 'only the first time',
      'Rule failed automatically because it is a personal rule and its owner can not see the object.' => 'Rule failed automatically because it is a personal rule and its owner can not see the object.',
      'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.' => 'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.',
      '%s target(s) are invalid or of the wrong type: %s.' => '%s target(s) are invalid or of the wrong type: %s.',
      'has bit' => 'has bit',
      'The selected rule type ("%s") is not recognized by Herald.' => 'The selected rule type ("%s") is not recognized by Herald.',
      'Run Duration' => 'Run Duration',
      'No conditions matched.' => 'No conditions matched.',
      'Test Console' => 'Test Console',
      'Rules %s are recursively dependent upon one another! Don\'t do this! You have formed an unresolvable cycle in the dependency graph!' => 'Rules %s are recursively dependent upon one another! Don\'t do this! You have formed an unresolvable cycle in the dependency graph!',
      'The %s repository is still importing.' => 'The %s repository is still importing.',
      'do not include' => 'do not include',
      'New Rule for' => 'New Rule for',
      'Transcripts' => 'Transcripts',
      'Content source' => 'Content source',
      'Rule/Content Mismatch' => 'Rule/Content Mismatch',
      'is' => 'is',
      'This rule will become active again.' => 'This rule will become active again.',
      'Can Manage Global Rules' => 'Can Manage Global Rules',
      'To view a transcript, you must be able to view the object the transcript is about.' => 'To view a transcript, you must be able to view the object the transcript is about.',
      'This rule type is not supported by the selected content type.' => 'This rule type is not supported by the selected content type.',
      'Herald User Guide' => 'Herald User Guide',
      'Trigger Object' => 'Trigger Object',
      'Object Monograms' => 'Object Monograms',
      'Take these actions every time this rule matches:' => 'Take these actions every time this rule matches:',
      'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.' => 'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.',
      'Personal Rule' => 'Personal Rule',
      'Object Name' => 'Object Name',
      'Object state is not compatible with rule.' => 'Object state is not compatible with rule.',
      '%s enabled this rule.' => '%s enabled this rule.',
      'Unknown condition "%s"!' => 'Unknown condition "%s"!',
      'is true' => 'is true',
      'This rule triggers for %s.' => 'This rule triggers for %s.',
      'Rule Type' => 'Rule Type',
      '(Disabled)' => '(Disabled)',
      'H%d' => 'H%s',
      'contains' => 'contains',
      'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.' => 'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.',
      'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.' => 'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.',
      'Conditions were met for %s' => 'Conditions were met for %s',
      'Transcript IDs' => 'Transcript IDs',
      'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.' => 'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.',
      'Herald Transcript' => 'Herald Transcript',
      '%s target(s) could not be loaded: %s.' => '%s target(s) could not be loaded: %s.',
      'Unknown Effect ("%s")' => 'Unknown Effect ("%s")',
      'Herald Transcripts' => 'Herald Transcripts',
      'Rule failed.' => 'Rule failed.',
      'Herald rules will not trigger until import completes.' => 'Herald rules will not trigger until import completes.',
      'Do nothing' => 'Do nothing',
      '%s %s %s' => '%s %s %s',
      '<Unknown Field "%s">' => '<Unknown Field "%s">',
      'Show Only Disabled Rules' => 'Show Only Disabled Rules',
      'No Herald rules applied to this object.' => 'No Herald rules applied to this object.',
      'This transcript has an invalid or inaccessible adapter.' => 'This transcript has an invalid or inaccessible adapter.',
      'All conditions matched.' => 'All conditions matched.',
      'matches regexp pair' => 'matches regexp pair',
      'Object produced non-array value!' => 'Object produced non-array value!',
      'Action "%s" is not forbidden!' => 'Action "%s" is not forbidden!',
      'does not match:' => 'does not match:',
      'This action does not support rules of type "%s".' => 'This action does not support rules of type "%s".',
      'Authored by %s' => 'Authored by %s',
      'No Permission' => 'No Permission',
      'Rule for' => 'Rule for',
      'is any of' => 'is any of',
      'is not' => 'is not',
      'Really activate this rule?' => 'Really activate this rule?',
      'Not all conditions matched.' => 'Not all conditions matched.',
      'is not myself' => 'is not myself',
      'Run Test' => 'Run Test',
      'matches:' => 'matches:',
      'No object exists with that name.' => 'No object exists with that name.',
      'New Condition' => 'New Condition',
      'Global rules can bypass access controls.' => 'Global rules can bypass access controls.',
      'Object Link' => 'Object Link',
      'This was a dry run, so no actions were actually taken.' => 'This was a dry run, so no actions were actually taken.',
      'include any of' => 'include any of',
      '%s renamed this rule from "%s" to "%s".' => '%s renamed this rule from "%s" to "%s".',
      'Unknown condition \'%s\'.' => 'Unknown condition \'%s\'.',
      'Rule Transcript' => 'Rule Transcript',
      'Run At Epoch' => 'Run At Epoch',
      'Regular expression pair is not valid JSON!' => 'Regular expression pair is not valid JSON!',
      'Object PHID' => 'Object PHID',
      'is not any of' => 'is not any of',
      'Field "%s" does not exist!' => 'Field "%s" does not exist!',
      'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.' => 'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.',
      'Rule Status' => 'Rule Status',
      'Activate Rule' => 'Activate Rule',
      'View Full Transcript' => 'View Full Transcript',
      'No valid object provided for object rule!' => 'No valid object provided for object rule!',
      'This rule will no longer activate.' => 'This rule will no longer activate.',
      'is false' => 'is false',
      'First regular expression is invalid!' => 'First regular expression is invalid!',
      'The regular expression pair "%s" must have exactly two elements.' => 'The regular expression pair "%s" must have exactly two elements.',
      'No transcripts found.' => 'No transcripts found.',
    );
  }

}