Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/xenial64"
    # config.vm.box = "ubuntu/trusty64"
    config.vm.synced_folder "./vagrant", "/vagrant", id: "vagrant-root"
    # Make sure you edit your local /etc/hosts file for this IP + alias
    config.vm.network :private_network, ip: "192.168.33.101"

    config.vm.provider :virtualbox do |vm|
        vm.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
        vm.customize ["modifyvm", :id, "--memory", 4096] # Set to whatever memory you want
        vm.customize ["modifyvm", :id, "--name", "KnightStorm"] # Give it a name!
        vm.customize ["modifyvm", :id, "--cpus", 2] # How many CPUs?
    end

    config.vm.provision "shell" do |shell|
        shell.inline = "sudo apt-get update && sudo apt-get install -y python"
    end

    config.vm.provision "ansible" do |ansible|
        ansible.playbook = "./provision.yml"
    end
end
