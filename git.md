# Git and Github initial configuration

Configuring Git for the first time

```bash
git config --global user.name "Your Name Here"
git config --global user.email "your_email@example.com"
```

Generate your SSH keys

```bash
ssh-keygen -t rsa -C "your_email@example.com"
clip < ~/.ssh/id_rsa.pub
```
Go to your settings and add your SSH key to Github

[https://github.com/settings/ssh](https://github.com/settings/ssh)

Test your keys

```bash
ssh -T git@github.com
```

Clone your repo (change `ComPHPPuebla` for your username)

```bash
git clone git@github.com:ComPHPPuebla/itp-php.git
```
Happy coding!
