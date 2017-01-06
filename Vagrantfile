Vagrant.configure("2") do |config|
    config.ssh.forward_agent = true
    config.ssh.insert_key = false

    # Ubuntu 14.04 - Trusty Tahr
    config.vm.define "ubuntu14" do |ubuntu14|
        ubuntu14.vm.box = "geerlingguy/ubuntu1404"
        ubuntu14.vm.hostname = "localWP"
        ubuntu14.vm.network "private_network", ip: "192.168.27.14"
        #ubuntu14.vm.synced_folder "~/PhpStormWPContent/MUPlugins", "/vagrant/public_html/wp/wp-content/mu-plugins"
        #ubuntu14.vm.synced_folder "~/PhpStormWPContent/Plugins", "/vagrant/public_html/wp/wp-content/plugins"
        #ubuntu14.vm.synced_folder "~/PhpStormWPContent/Themes", "/vagrant/public_html/wp/wp-content/themes"
        ubuntu14.vm.provision "ansible" do |ansible|
            ansible.playbook = "playbook.yml"
        end
    end
end