Instagram
======================

This [bolt.cm](https://bolt.cm/) extension will get raw feed data from Instagram's public API. It makes use a modified version of [Vinkla's Instagram Package](https://github.com/vinkla/instagram).

### Installation
1. Login to your Bolt installation
2. Go to "Extend" or "Extras > Extend"
3. Type `instagram` into the input field
4. Click on the extension name
5. Click on "Browse Versions"
6. Click on "Install This Version" on the latest stable version

### Requirements
- PHP 7+
- Bolt 3+

### Configuration
Nothing to configure, just call the `{{ instagram('username') }}` twig function where `username` is the user profile you want to retreive.
This will return an array of the latests posts in that profile.

### Example
```
{% for post in instagram('marutaro') %}
  {{ dump(post) }}
{% endfor%}
```

### Notes
Because this extension uses an UNOFFICIAL Instagram's public API it has the following limitations:
- You can only fetch feeds from public accounts.
- You can only retrieve the lastest 12 posts.
- It may break without further notice, so be warned.

### Contributing
I'm planning to adding a more robust implementation using access tokens. But for now I'm open to suggestions and PRs are always welcome.
