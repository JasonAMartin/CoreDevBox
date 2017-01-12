Core Dev Box

A fast way to setup a core development VM using Vagrant, Ansible and VirtualBox.

===============

### REQUIRED
============

[Ansible](https://www.ansible.com/)
[Vagrant](https://www.vagrantup.com)
[VirtualBox](https://www.virtualbox.org/wiki/VirtualBox)

### PURPOSE
============

This is a work in progress, but the end goal is to have a way to quickly spin up a VM for an app for testing, development, etc.

### INSTALLED ITEMS
===================

1. PHP 7.1
2. Composer
3. NodeJS 7.x
4. MariaDB w/ test database/table/entry
5. Nginx
6. Oh-my-zsh shell with customizations
7. Java 8
8. Redis
9. /vagrant/app/public and /vagrant/app-api/public are setup with demo files.

### USAGE
============

1. Clone it.
2. Customize the **Vagrantfile** and **provision.yml**
3. Set it up by running:

```$ vagrant up```

Once it's running, your files can go into vagrant/app/public or your own customized location.

Note: You may need to do a ```$ vagrant reload``` after initial setup (if Apache test page shows up instead of Nginx site).

Get going!


### THANKS:
============

To all the people who have posted playbooks, notes, help and thoughts about building a vagrant/ansible solution as it helped me greatly.

Special thanks to https://github.com/heybigname/ansible. After lots of testing, I forked this repo, wiped out what I didn't need and used it as a good starting point. Lots of fun came as a result!

### Changelog
============

**1.0**

The first working release.
