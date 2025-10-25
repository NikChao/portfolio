## How I built this site
12 Oct, 2025

---

At some point this year, I wanted to challenge myself and start building without frameworks or libraries. I wanted to see
if frameworks like NextJS and Ruby on Rails were truly speeding me up or if operating systems, programming languages, browsers and editors
had come far enough along that I didn't need them for most things. What I've learnt is that, for a lot of my side projects, not only
do I not need them, but they often get in the way.

### The stack
* Debian VPS on Hetzner
* nginx + php-fpm
* vanilla php
* html + js + css
* markdown files
* composer
* edited and built in [neovim](https://neovim.io/) ([lazy vim](https://lazyvim.org/)) in [ghostty](https://ghostty.org/)

### What have I built

* Portfolio site: [https://github.com/NikChao/portfolio](https://github.com/NikChao/portfolio)
* Scaffold for future projects: [https://github.com/NikChao/smallstarter](https://github.com/NikChao/smallstarter)

What I wanted for this site was a way to type away in markdown files and for them to automatically be added to a list of posts.


### The good
* I can write exactly what I need, no more and no less
* Deploying is as simple as copying files (rsync) to my VPS
* It's cheap and easy to host multiple apps on one server

### The interesting
* I feel more competent. I'm not sure that I actually am, but it feels good to build from the ground up.
* CSS variables, import maps and other gifts browsers give us mean that I haven't really missed having a bundler or post-processor
* Even the cheapest Hetzner hosts are pretty fast. Most of my latency comes from getting assets to the user.

### The meh
* I have to make choices about dependencies. I love an omakase framework like Rails. I like trusting someone else for choices of dependencies.
* Analytics requires a bit more work. On rails, I could use libraries like [ahoy](https://github.com/ankane/ahoy), and when deploying to AWS I got a tonne of automatic metrics from CloudFront and ECS Fargate. For this project, I've kept it simply and just log to a file with today's date as its name.
