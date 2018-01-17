<?php

final class PhabricatorAlmanacEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Specify a public key to trust with --id.' => 'Specify a public key to trust with --id.',
      'Name of the service.' => 'Name of the service.',
      'Installing device %s...' => 'Installing device %s...',
      'Namespace' => 'Namespace',
      'Add Property' => 'Add Property',
      'Builtin Property' => 'Builtin Property',
      'Enable this binding?' => 'Enable this binding?',
      '%s renamed this service from "%s" to "%s".' => '%s renamed this service from "%s" to "%s".',
      'ID of the key to revoke trust for.' => 'ID of the key to revoke trust for.',
      'Name of the network.' => 'Name of the network.',
      'This is a cluster service.' => 'This is a cluster service.',
      'Manage public and private networks.' => 'Manage public and private networks.',
      'Almanac service, device, property and namespace names must begin and end with a letter or number.' => 'Almanac service, device, property and namespace names must begin and end with a letter or number.',
      'To view a binding, you must also be able to view its device and interface.' => 'To view a binding, you must also be able to view its device and interface.',
      'This device is bound to a cluster service.' => 'This device is bound to a cluster service.',
      'Device %d' => 'Device %s',
      'Add Interface' => 'Add Interface',
      'Almanac Namespace' => 'Almanac Namespace',
      'Reset property "%s" to its default value?' => 'Reset property "%s" to its default value?',
      'Unable to load interface!' => 'Unable to load interface!',
      'Bindings must specify an interface.' => 'Bindings must specify an interface.',
      'Cluster Device' => 'Cluster Device',
      'Disable this binding?' => 'Disable this binding?',
      'This device has no associated SSH public keys.' => 'This device has no associated SSH public keys.',
      'Create Service' => 'Create Service',
      'You can only trust keys associated with Almanac devices.' => 'You can only trust keys associated with Almanac devices.',
      'Almanac service, device, property and namespace names may only contain lowercase letters, numbers, hyphens, and periods.' => 'Almanac service, device, property and namespace names may only contain lowercase letters, numbers, hyphens, and periods.',
      'You do not have permission to create Almanac services.' => 'You do not have permission to create Almanac services.',
      'Public key with ID %s is already trusted.' => 'Public key with ID %s is already trusted.',
      '%s enabled this binding.' => '%s enabled this binding.',
      'Register this host even if keys already exist on disk.' => 'Register this host even if keys already exist on disk.',
      'Path to a private key for the host.' => 'Path to a private key for the host.',
      'Drydock: Resource Pool' => 'Drydock: Resource Pool',
      'Add Binding' => 'Add Binding',
      'Almanac service, device, property and namespace names may not be more than 100 characters long.' => 'Almanac service, device, property and namespace names may not be more than 100 characters long.',
      'Mark a public key as trusted.' => 'Mark a public key as trusted.',
      'Almanac Devices' => 'Almanac Devices',
      'Custom Service' => 'Custom Service',
      'Phabricator Cluster: Database' => 'Phabricator Cluster: Database',
      'Almanac Networks' => 'Almanac Networks',
      'You must be able to view the network an interface resides on to view the interface.' => 'You must be able to view the network an interface resides on to view the interface.',
      'Edit Namespace' => 'Edit Namespace',
      'Network %d' => 'Network %s',
      'Properties inherit the policies of their object.' => 'Properties inherit the policies of their object.',
      'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.' => 'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.',
      'This service has not been bound to any device interfaces yet.' => 'This service has not been bound to any device interfaces yet.',
      'Namespace Name' => 'Namespace Name',
      'Really trust this key?' => 'Really trust this key?',
      'Browse documentation for Almanac.' => 'Browse documentation for Almanac.',
      'Service name is required.' => 'Service name is required.',
      'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.' => 'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.',
      'Browse Services' => 'Browse Services',
      'Almanac service, device, property and namespace names may not have any segments containing only digits.' => 'Almanac service, device, property and namespace names may not have any segments containing only digits.',
      'You can not bind a service to an invalid or restricted interface.' => 'You can not bind a service to an invalid or restricted interface.',
      'Specify a private key with --private-key.' => 'Specify a private key with --private-key.',
      'Remove interface %s on device %s?' => 'Remove interface %s on device %s?',
      'Almanac service, device, property and namespace names must be at least 3 characters long.' => 'Almanac service, device, property and namespace names must be at least 3 characters long.',
      'Phabricator Cluster: Repository' => 'Phabricator Cluster: Repository',
      'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.' => 'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.',
      'Control who can create new named services and devices.' => 'Control who can create new named services and devices.',
      'Almanac services must have unique names.' => 'Almanac services must have unique names.',
      'Another namespace with this name already exists. Each namespace must have a unique name.' => 'Another namespace with this name already exists. Each namespace must have a unique name.',
      'You can not edit an interface which belongs to a nonexistent or restricted network.' => 'You can not edit an interface which belongs to a nonexistent or restricted network.',
      'This permission is very dangerous. %s' => 'This permission is very dangerous. %s',
      'Binding %d' => 'Binding %s',
      'An interface inherits the policies of the device it belongs to.' => 'An interface inherits the policies of the device it belongs to.',
      'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.' => 'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.',
      'Create Binding' => 'Create Binding',
      'Reset' => 'Reset',
      'Edit Network' => 'Edit Network',
      'Almanac Service' => 'Almanac Service',
      'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.' => 'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.',
      'Edit Service' => 'Edit Service',
      'Create Namespace' => 'Create Namespace',
      'A binding inherits the policies of its service.' => 'A binding inherits the policies of its service.',
      'Precomputed interface PHIDs must be of type AlmanacInterfacePHIDType.' => 'Precomputed interface PHIDs must be of type AlmanacInterfacePHIDType.',
      'No Almanac service type "%s" exists!' => 'No Almanac service type "%s" exists!',
      'Cluster Database' => 'Cluster Database',
      'No Almanac Devices found.' => 'No Almanac Devices found.',
      'Almanac property values must be representable in JSON. %s' => 'Almanac property values must be representable in JSON. %s',
      'Interface %d' => 'Interface %s',
      'Network' => 'Network',
      'Create Network' => 'Create Network',
      'Read information about Almanac devices.' => 'Read information about Almanac devices.',
      'Device Interfaces' => 'Device Interfaces',
      'Custom Property' => 'Custom Property',
      'Installing public key...' => 'Installing public key...',
      'Search for services with specific names.' => 'Search for services with specific names.',
      'Service Name' => 'Service Name',
      'Almanac Core Objects' => 'Almanac Core Objects',
      'Edit Device' => 'Edit Device',
      'Public key with ID %s is not trusted.' => 'Public key with ID %s is not trusted.',
      'All Networks' => 'All Networks',
      'The name of the service.' => 'The name of the service.',
      'Public key "%s" is not an active key.' => 'Public key "%s" is not an active key.',
      'Edit Network: %s' => 'Edit Network: %s',
      'Delete Property' => 'Delete Property',
      'Edit Property' => 'Edit Property',
      'Register this host as an Almanac device.' => 'Register this host as an Almanac device.',
      'TRUSTED' => 'TRUSTED',
      '%s created this service.' => '%s created this service.',
      'You do not have permission to create Almanac networks.' => 'You do not have permission to create Almanac networks.',
      'Search for devices by name substring.' => 'Search for devices by name substring.',
      'Namespace name is required.' => 'Namespace name is required.',
      'Search for services bound to particular devices.' => 'Search for services bound to particular devices.',
      'No private key exists at path "%s"!' => 'No private key exists at path "%s"!',
      'Device name is required.' => 'Device name is required.',
      'Interfaces must have an address.' => 'Interfaces must have an address.',
      'Drydock Pool' => 'Drydock Pool',
      'Namespace %d' => 'Namespace %s',
      'You can not delete this interface because it is currently in use. One or more services are bound to it.' => 'You can not delete this interface because it is currently in use. One or more services are bound to it.',
      'Edit Service: %s' => 'Edit Service: %s',
      'Almanac Console' => 'Almanac Console',
      'Browse Interfaces' => 'Browse Interfaces',
      'Namespace %s' => 'Namespace %s',
      'Almanac Binding' => 'Almanac Binding',
      'Port numbers must be between 1 and 65535, inclusive.' => 'Port numbers must be between 1 and 65535, inclusive.',
      'Type a service type name...' => 'Type a service type name...',
      'Can Create Networks' => 'Can Create Networks',
      'Can Create Services' => 'Can Create Services',
      'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.' => 'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.',
      '%s renamed this device from "%s" to "%s".' => '%s renamed this device from "%s" to "%s".',
      'Delete property "%s"?' => 'Delete property "%s"?',
      'The service for this binding is a cluster service.' => 'The service for this binding is a cluster service.',
      'You can not delete an interface which is still in use.' => 'You can not delete an interface which is still in use.',
      'Binding %s' => 'Binding %s',
      'Network name is required.' => 'Network name is required.',
      'Create Property' => 'Create Property',
      'You do not have permission to create Almanac devices within the "%s" namespace.' => 'You do not have permission to create Almanac devices within the "%s" namespace.',
      'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.',
      'This key is associated with device "%s".' => 'This key is associated with device "%s".',
      'Key %s has been marked as trusted.' => 'Key %s has been marked as trusted.',
      'Binding' => 'Binding',
      'This engine is used to edit Almanac networks.' => 'This engine is used to edit Almanac networks.',
      'You can not bind a service to the same interface multiple times.' => 'You can not bind a service to the same interface multiple times.',
      'Trust has been revoked for public key %s.' => 'Trust has been revoked for public key %s.',
      'Service Directory' => 'Service Directory',
      'To create a new service, you must select a service type.' => 'To create a new service, you must select a service type.',
      '%s removed the interface %s from this device.' => '%s removed the interface %s from this device.',
      'Service Types' => 'Service Types',
      'Almanac Bindings' => 'Almanac Bindings',
      'User aborted workflow.' => 'User aborted workflow.',
      'Service Type' => 'Service Type',
      'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.',
      'Specify a device with --device.' => 'Specify a device with --device.',
      'Edit Namespace: %s' => 'Edit Namespace: %s',
      '%s changed interface %s on this device to %s.' => '%s changed interface %s on this device to %s.',
      'Service Bindings' => 'Service Bindings',
      'Invalid Property' => 'Invalid Property',
      'The service type constant.' => 'The service type constant.',
      '%s locked this service.' => '%s locked this service.',
      'The property name "%s" is invalid. This property can not be edited.' => 'The property name "%s" is invalid. This property can not be edited.',
      'Almanac' => 'Almanac',
      'Can Manage Cluster Services' => 'Can Manage Cluster Services',
      'No public key exists with ID "%s".' => 'No public key exists with ID "%s".',
      'Type a service name...' => 'Type a service name...',
      'Almanac Namespaces' => 'Almanac Namespaces',
      'No Almanac Services found.' => 'No Almanac Services found.',
      'IMPORTANT!' => 'IMPORTANT!',
      'Almanac service, device, property and namespace names may not contain multiple consecutive hyphens.' => 'Almanac service, device, property and namespace names may not contain multiple consecutive hyphens.',
      'You can not add an interface on a nonexistent or restricted network.' => 'You can not add an interface on a nonexistent or restricted network.',
      '%s created this device.' => '%s created this device.',
      'Almanac User Guide' => 'Almanac User Guide',
      'Almanac service, device, property and namespace names may not contain hyphens adjacent to periods.' => 'Almanac service, device, property and namespace names may not contain hyphens adjacent to periods.',
      'You have permission to create cluster services.' => 'You have permission to create cluster services.',
      'You do not have permission to create Almanac services within the "%s" namespace.' => 'You do not have permission to create Almanac services within the "%s" namespace.',
      'Edit Interface' => 'Edit Interface',
      'Specify a public key to revoke trust for with --id.' => 'Specify a public key to revoke trust for with --id.',
      'Choose Service Type' => 'Choose Service Type',
      'This engine is used to edit Almanac properties.' => 'This engine is used to edit Almanac properties.',
      'No services are bound to this device.' => 'No services are bound to this device.',
      'Name of the namespace.' => 'Name of the namespace.',
      'Network %s' => 'Network %s',
      'Bound Services' => 'Bound Services',
      'Disable Binding' => 'Disable Binding',
      'Create Device' => 'Create Device',
      'This engine is used to edit Almanac services.' => 'This engine is used to edit Almanac services.',
      'Service %d' => 'Service %s',
      'Edit Almanac Namespace Configurations' => 'Edit Almanac Namespace Configurations',
      'Almanac devices must have unique names.' => 'Almanac devices must have unique names.',
      'Edit Almanac Device Configurations' => 'Edit Almanac Device Configurations',
      'Edit Property: %s' => 'Edit Property: %s',
      'Name of the device.' => 'Name of the device.',
      'Enable Binding' => 'Enable Binding',
      'Can Create Namespaces' => 'Can Create Namespaces',
      'Read information about Almanac services.' => 'Read information about Almanac services.',
      'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.' => 'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.',
      '%s added the interface %s to this device.' => '%s added the interface %s to this device.',
      'Edit Almanac Property Configurations' => 'Edit Almanac Property Configurations',
      '%s created this network.' => '%s created this network.',
      'Defines a database service for use in a Phabricator cluster.' => 'Defines a database service for use in a Phabricator cluster.',
      'All Namespaces' => 'All Namespaces',
      'The name of the device.' => 'The name of the device.',
      'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.' => 'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.',
      'You can not edit an invalid or restricted interface.' => 'You can not edit an invalid or restricted interface.',
      'Namespaces' => 'Namespaces',
      'Create and update services, and map them to interfaces on devices.' => 'Create and update services, and map them to interfaces on devices.',
      'Almanac service, device, property and namespace names may not contain multiple consecutive periods.' => 'Almanac service, device, property and namespace names may not contain multiple consecutive periods.',
      'All Services' => 'All Services',
      '%s changed this binding from %s to %s.' => '%s changed this binding from %s to %s.',
      'Defines a pool of hosts which Drydock can allocate.' => 'Defines a pool of hosts which Drydock can allocate.',
      'Defines a unstructured custom service.' => 'Defines a unstructured custom service.',
      'Reset Property' => 'Reset Property',
      'Apply transactions to create a new device or edit an existing one.' => 'Apply transactions to create a new device or edit an existing one.',
      'Delete Interface' => 'Delete Interface',
      'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.' => 'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.',
      'Almanac Interface' => 'Almanac Interface',
      'Installing private key...' => 'Installing private key...',
      'No Almanac Networks found.' => 'No Almanac Networks found.',
      'Almanac Network' => 'Almanac Network',
      'You do not have permission to manage cluster services.' => 'You do not have permission to manage cluster services.',
      '%s:%s (%s on %s)' => '%s:%s (%s on %s)',
      'Create Interface' => 'Create Interface',
      'Search for networks by name substring.' => 'Search for networks by name substring.',
      'TRUST REVOKED' => 'TRUST REVOKED',
      'Device Name' => 'Device Name',
      'No properties.' => 'No properties.',
      '%s renamed this namespace from "%s" to "%s".' => '%s renamed this namespace from "%s" to "%s".',
      'All Devices' => 'All Devices',
      'Almanac Properties' => 'Almanac Properties',
      'You do not have permission to create Almanac devices.' => 'You do not have permission to create Almanac devices.',
      '%s disabled this binding.' => '%s disabled this binding.',
      'Edit Almanac Network Configurations' => 'Edit Almanac Network Configurations',
      'You do not have permission to create Almanac namespaces.' => 'You do not have permission to create Almanac namespaces.',
      'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.' => 'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.',
      'Type an interface name...' => 'Type an interface name...',
      '%s created this namespace.' => '%s created this namespace.',
      'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.' => 'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.',
      'Can Create Devices' => 'Can Create Devices',
      'Browse Service Types' => 'Browse Service Types',
      'Search for services by name substring.' => 'Search for services by name substring.',
      'Get Almanac bindings for the service.' => 'Get Almanac bindings for the service.',
      'Get Almanac properties for the object.' => 'Get Almanac properties for the object.',
      'You do not have permission to create new cluster services.' => 'You do not have permission to create new cluster services.',
      'Almanac Device' => 'Almanac Device',
      'Interfaces must have a port.' => 'Interfaces must have a port.',
      'Interface In Use' => 'Interface In Use',
      'Almanac device name to register.' => 'Almanac device name to register.',
      '%s updated the property "%s".' => '%s updated the property "%s".',
      'Revoke trust of a public key.' => 'Revoke trust of a public key.',
      'Edit Almanac Service Configurations' => 'Edit Almanac Service Configurations',
      'This engine is used to edit Almanac namespaces.' => 'This engine is used to edit Almanac namespaces.',
      'Create an inventory of physical and virtual hosts and devices.' => 'Create an inventory of physical and virtual hosts and devices.',
      'Cluster Repository' => 'Cluster Repository',
      'Find services by type.' => 'Find services by type.',
      'Networks' => 'Networks',
      'Defines a repository service for use in a Phabricator cluster.' => 'Defines a repository service for use in a Phabricator cluster.',
      '%s unlocked this service.' => '%s unlocked this service.',
      'This host has been registered as "%s" and a trusted keypair has been installed.' => 'This host has been registered as "%s" and a trusted keypair has been installed.',
      '%s deleted the property "%s".' => '%s deleted the property "%s".',
      'Service "%s" does not exist or could not be loaded!' => 'Service "%s" does not exist or could not be loaded!',
      'Search for devices with specific names.' => 'Search for devices with specific names.',
      'Service %s' => 'Service %s',
      'Edit Binding' => 'Edit Binding',
      'Already Bound' => 'Already Bound',
      'Apply transactions to create a new service or edit an existing one.' => 'Apply transactions to create a new service or edit an existing one.',
      'This host has device ID "%s", but there is no corresponding device record in Almanac.' => 'This host has device ID "%s", but there is no corresponding device record in Almanac.',
      '%s renamed this network from "%s" to "%s".' => '%s renamed this network from "%s" to "%s".',
      'Edit Device: %s' => 'Edit Device: %s',
      'Device %s' => 'Device %s',
      'HOST REGISTERED' => 'HOST REGISTERED',
      'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.' => 'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.',
      'You do not have permission to create Almanac namespaces within the "%s" namespace.' => 'You do not have permission to create Almanac namespaces within the "%s" namespace.',
      'You do not have permission to manage Almanac cluster services.' => 'You do not have permission to manage Almanac cluster services.',
      '%s created this binding.' => '%s created this binding.',
      '%s:%s (%s)' => '%s:%s (%s)',
      'This engine is used to edit Almanac devices.' => 'This engine is used to edit Almanac devices.',
      'ID of the key to trust.' => 'ID of the key to trust.',
      'No such device "%s" exists!' => 'No such device "%s" exists!',
      'No Almanac namespaces found.' => 'No Almanac namespaces found.',
    );
  }

}
