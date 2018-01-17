<?php

final class PhabricatorDaemonEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'There are no running daemons to reload.' => 'There are no running daemons to reload.',
      'Temporary Failures' => 'Temporary Failures',
      'Show only local daemons.' => 'Show only local daemons.',
      'Clock' => 'Clock',
      'Leased' => 'Leased',
      'Unable to stop processes running without PID files. Try running this command again with sudo.' => 'Unable to stop processes running without PID files. Try running this command again with sudo.',
      'Starting daemons as %s' => 'Starting daemons as %s',
      'Gracefully restart daemon processes in-place to pick up changes to source. This will not disrupt running jobs. This is an advanced workflow; most installs should use __%s__.' => 'Gracefully restart daemon processes in-place to pick up changes to source. This will not disrupt running jobs. This is an advanced workflow; most installs should use __%s__.',
      'Show %d more character(s)...' => 'Show %s more character(s)...',
      'Retries' => 'Retries',
      'Shutting Down' => 'Shutting Down',
      'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.' => 'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.',
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => 'This daemon has been lost or exited uncleanly, and is presumed dead.',
      'Terminating process %d...' => 'Terminating process %s...',
      'Running as' => 'Running as',
      'No daemons match \'%s\'! Use \'%s\' for a list of available daemons.' => 'No daemons match \'%s\'! Use \'%s\' for a list of available daemons.',
      'Overseer' => 'Overseer',
      'No such daemon "%s"!' => 'No such daemon "%s"!',
      'Archived Tasks' => 'Archived Tasks',
      'No tasks have completed in the last 15 minutes.' => 'No tasks have completed in the last 15 minutes.',
      'Task Class' => 'Task Class',
      'Queued Tasks' => 'Queued Tasks',
      'This daemon is shutting down.' => 'This daemon is shutting down.',
      'Leased Tasks' => 'Leased Tasks',
      'Event %s' => 'Event %s',
      'All Daemons' => 'All Daemons',
      'This daemon encountered an error recently and is waiting a moment to restart.' => 'This daemon encountered an error recently and is waiting a moment to restart.',
      'Daemon %d %s [%s] %s' => 'Daemon %s %s [%s] %s',
      'There are processes running that look like Phabricator daemons but have no corresponding PID files:
    %s
    Stop these processes by re-running this command with the %s parameter.' => 'There are processes running that look like Phabricator daemons but have no corresponding PID files:
    %s
    Stop these processes by re-running this command with the %s parameter.',
      'There are no upcoming event triggers.' => 'There are no upcoming event triggers.',
      'You must specify which daemon to launch.' => 'You must specify which daemon to launch.',
      'Run the daemon as the current user instead of the configured %s' => 'Run the daemon as the current user instead of the configured %s',
      'Show %d more line(s)...' => 'Show %s more line(s)...',
      'There are no running Phabricator daemons.' => 'There are no running Phabricator daemons.',
      'Reloading process %d...' => 'Reloading process %s...',
      'Ignore running processes that look like daemons but do not have corresponding PID files.' => 'Ignore running processes that look like daemons but do not have corresponding PID files.',
      'Not Leased' => 'Not Leased',
      'This daemon is shutting down gracefully.' => 'This daemon is shutting down gracefully.',
      'Stop all running daemons, or specific daemons identified by PIDs. Use **%s** to find PIDs.' => 'Stop all running daemons, or specific daemons identified by PIDs. Use **%s** to find PIDs.',
      'Task Does Not Exist' => 'Task Does Not Exist',
      'Failures' => 'Failures',
      'Active Daemons' => 'Active Daemons',
      'Unknown task status!' => 'Unknown task status!',
      'You can not specify conflicting options %s and %s together.' => 'You can not specify conflicting options %s and %s together.',
      'Start a specific __daemon__, or __n__ copies of a specific __daemon__.' => 'Start a specific __daemon__, or __n__ copies of a specific __daemon__.',
      'Show status of running daemons.' => 'Show status of running daemons.',
      'Daemon' => 'Daemon',
      'Daemon Logs' => 'Daemon Logs',
      'Not Completed' => 'Not Completed',
      'Exited' => 'Exited',
      'Show a list of available daemons.' => 'Show a list of available daemons.',
      'Start daemons even if daemons are already running.' => 'Start daemons even if daemons are already running.',
      'This task may have recently been garbage collected.' => 'This task may have recently been garbage collected.',
      'Grace period for daemons to attempt a clean shutdown, in seconds. Defaults to __15__ seconds.' => 'Grace period for daemons to attempt a clean shutdown, in seconds. Defaults to __15__ seconds.',
      'Combined Daemon Log' => 'Combined Daemon Log',
      'Start the standard configured collection of Phabricator daemons. This is appropriate for most installs. Use **%s** to customize which daemons are launched.' => 'Start the standard configured collection of Phabricator daemons. This is appropriate for most installs. Use **%s** to customize which daemons are launched.',
      'Daemon Class' => 'Daemon Class',
      'No daemons to reload.' => 'No daemons to reload.',
      'Bulk Job %d' => 'Bulk Job %s',
      'Waiting For Confirmation' => 'Waiting For Confirmation',
      'Seen' => 'Seen',
      'This daemon is running normally and reported a status update recently (within %s). The process is currently waiting to restart, either because it is hibernating or because it encountered an error.' => 'This daemon is running normally and reported a status update recently (within %s). The process is currently waiting to restart, either because it is hibernating or because it encountered an error.',
      'Freed %s task lease(s).' => 'Freed %s task lease(s).',
      'Print the logs for all daemons, or some daemon(s) identified by ID. You can get the ID for a daemon from the Daemon Console in the web interface.' => 'Print the logs for all daemons, or some daemon(s) identified by ID. You can get the ID for a daemon from the Daemon Console in the web interface.',
      'Lease Expires' => 'Lease Expires',
      'This daemon is running.' => 'This daemon is running.',
      'This daemon has not reported its status recently. It may have exited uncleanly.' => 'This daemon has not reported its status recently. It may have exited uncleanly.',
      'Maximum pool size.' => 'Maximum pool size.',
      'Unknown status "%s"!' => 'Unknown status "%s"!',
      'This job is waiting for tasks to be queued.' => 'This job is waiting for tasks to be queued.',
      'ERROR: The PHP function %s is disabled. You must enable it to run daemons on this machine.
    ' => 'ERROR: The PHP function %s is disabled. You must enable it to run daemons on this machine.
    ',
      'Lease Status' => 'Lease Status',
      'Show logs for daemon(s) with given ID(s).' => 'Show logs for daemon(s) with given ID(s).',
      'No daemons are running.' => 'No daemons are running.',
      'Specify a proportion of machine memory which must be free before autoscale pools will grow. For example, a value of 0.25 means that pools will not grow unless the machine has at least 25%%%% of its RAM free.' => 'Specify a proportion of machine memory which must be free before autoscale pools will grow. For example, a value of 0.25 means that pools will not grow unless the machine has at least 25%%%% of its RAM free.',
      'By default, **%s** will free all task leases held by the daemons. With this flag, this step will be skipped.' => 'By default, **%s** will free all task leases held by the daemons. With this flag, this step will be skipped.',
      'Killing process %d...' => 'Killing process %s...',
      'Recently Completed Tasks (Last 15m)' => 'Recently Completed Tasks (Last 15m)',
      'Maximum Retries' => 'Maximum Retries',
      'Task %d' => 'Task %s',
      'Next In Queue' => 'Next In Queue',
      'Retries Forever' => 'Retries Forever',
      'Exiting' => 'Exiting',
      'Argv' => 'Argv',
      'You must launch at least one daemon.' => 'You must launch at least one daemon.',
      'Lease Expired' => 'Lease Expired',
      'Manage Bulk Jobs' => 'Manage Bulk Jobs',
      'Freeing active task leases...' => 'Freeing active task leases...',
      'Log' => 'Log',
      'Start work on this bulk job?' => 'Start work on this bulk job?',
      'Interrupting process %d...' => 'Interrupting process %s...',
      'View Full Logs' => 'View Full Logs',
      'Lease Owner' => 'Lease Owner',
      '%s requires the directory \'%s\' to exist, but it does not exist and could not be created. Create this directory or update \'%s\' / \'%s\' in your configuration to point to an existing directory.' => '%s requires the directory \'%s\' to exist, but it does not exist and could not be created. Create this directory or update \'%s\' / \'%s\' in your configuration to point to an existing directory.',
      'This job is running.' => 'This job is running.',
      'Show a specific number of log messages (default 100).' => 'Show a specific number of log messages (default 100).',
      'Start Work' => 'Start Work',
      'Daemons in library __%s__:' => 'Daemons in library __%s__:',
      'Task Status' => 'Task Status',
      'phd start: Unable to start daemons because daemons are already running.
    You can view running daemons with \'%s\'.
    You can stop running daemons with \'%s\'.
    You can use \'%s\' to stop all daemons before starting new daemons.
    You can force daemons to start anyway with %s.' => 'phd start: Unable to start daemons because daemons are already running.
    You can view running daemons with \'%s\'.
    You can stop running daemons with \'%s\'.
    You can use \'%s\' to stop all daemons before starting new daemons.
    You can force daemons to start anyway with %s.',
      'Dead' => 'Dead',
      'No tasks are leased by workers.' => 'No tasks are leased by workers.',
      'PPID' => 'PPID',
      'Combined Log' => 'Combined Log',
      'This daemon exited normally and is no longer running.' => 'This daemon exited normally and is no longer running.',
      '(Pool: %s)' => '(Pool: %s)',
      'No daemon(s) with id(s) "%s" exist!' => 'No daemon(s) with id(s) "%s" exist!',
      'No Such Task' => 'No Such Task',
      'No daemons to kill.' => 'No daemons to kill.',
      '%s exited with a zero exit code, but emitted output consistent with failure under OSX.' => '%s exited with a zero exit code, but emitted output consistent with failure under OSX.',
      'Specify a daemon unambiguously. Multiple daemons match \'%s\': %s.' => 'Specify a daemon unambiguously. Multiple daemons match \'%s\': %s.',
      'This daemon did not report a status update for %s. It is presumed dead. Usually, this indicates that the daemon was killed or otherwise exited abruptly with an error. You may need to restart it.' => 'This daemon did not report a status update for %s. It is presumed dead. Usually, this indicates that the daemon was killed or otherwise exited abruptly with an error. You may need to restart it.',
      'Process %d exited.' => 'Process %s exited.',
      'This daemon is running normally and reported a status update recently (within %s).' => 'This daemon is running normally and reported a status update recently (within %s).',
      'Daemons are configured to run as user "%s" in configuration option `%s`, but the current user is "%s" and `phd` was unable to switch to the correct user with `sudo`. Command output:
    %s' => 'Daemons are configured to run as user "%s" in configuration option `%s`, but the current user is "%s" and `phd` was unable to switch to the correct user with `sudo`. Command output:
    %s',
      'View Task' => 'View Task',
      'Daemon Processes' => 'Daemon Processes',
      'PID "%d" is not a known Phabricator daemon PID.' => 'PID "%s" is not a known Phabricator daemon PID.',
      'Not touching active task queue leases.' => 'Not touching active task queue leases.',
      'Failure Count' => 'Failure Count',
      'Arguments' => 'Arguments',
      'Queue Utilization (Approximate)' => 'Queue Utilization (Approximate)',
      'Last' => 'Last',
      'Upcoming Triggers' => 'Upcoming Triggers',
      'You must specify which daemon to debug.' => 'You must specify which daemon to debug.',
      'Launching daemons (in debug mode):' => 'Launching daemons (in debug mode):',
      'This daemon exited cleanly.' => 'This daemon exited cleanly.',
      'Bulk Jobs' => 'Bulk Jobs',
      'Stop, then start the standard daemon loadout.' => 'Stop, then start the standard daemon loadout.',
      'This job is complete.' => 'This job is complete.',
      'Manage Phabricator Daemons' => 'Manage Phabricator Daemons',
      'PID' => 'PID',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run daemons on this machine.
    ' => 'ERROR: The PHP extension \'%s\' is not installed. You must install it to run daemons on this machine.
    ',
      'Confirm Bulk Job' => 'Confirm Bulk Job',
      'Daemon Log' => 'Daemon Log',
      'Launching daemons:' => 'Launching daemons:',
      'This job is waiting for confirmation before work begins.' => 'This job is waiting for confirmation before work begins.',
      'Retries After' => 'Retries After',
      'Start __daemon__ in the foreground and print large volumes of diagnostic information to the console.' => 'Start __daemon__ in the foreground and print large volumes of diagnostic information to the console.',
      'Task %d: %s' => 'Task %s: %s',
      'You are trying to run a daemon as a nonstandard user, and `%s` was not able to `%s` to the correct user. 
    Phabricator is configured to run daemons as "%s", but the current user is "%s". 
    Use `%s` to run as a different user, pass `%s` to ignore this warning, or edit `%s` to change the configuration.' => 'You are trying to run a daemon as a nonstandard user, and `%s` was not able to `%s` to the correct user. 
    Phabricator is configured to run daemons as "%s", but the current user is "%s". 
    Use `%s` to run as a different user, pass `%s` to ignore this warning, or edit `%s` to change the configuration.',
      'No More Retries' => 'No More Retries',
      '<DEAD> %s' => '<DEAD> %s',
      'Task %d Missing' => 'Task %s Missing',
      'Task queue is empty.' => 'Task queue is empty.',
      '%s ago (%s)' => '%s ago (%s)',
      'Daemon %s' => 'Daemon %s',
      'Also stop running processes that look like daemons but do not have corresponding PID files.' => 'Also stop running processes that look like daemons but do not have corresponding PID files.',
      'PID \'%s\' is not a valid PID.' => 'PID \'%s\' is not a valid PID.',
      'Started' => 'Started',
      'Daemon Details' => 'Daemon Details',
      '(Logs will appear in "%s".)' => '(Logs will appear in "%s".)',
    );
  }

}
