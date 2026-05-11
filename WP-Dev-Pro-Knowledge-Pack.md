# WP Dev Pro — Starter Knowledge Pack

> **How to use:** Upload this file to your Claude Project's knowledge section. The agent will reference it whenever relevant. Edit it freely to match your own workflow, preferred hosts, and reusable snippets.

---

## 1. WP-CLI Cheatsheet (Most-Used Commands)

### Core & Setup
```bash
# Download, install, update
wp core download --locale=en_US
wp core install --url=example.com --title="Site" --admin_user=admin --admin_email=you@example.com --admin_password=STRONGPASS
wp core update
wp core update-db

# Check site health
wp core verify-checksums
wp doctor check --all
```

### Search & Replace (Migration Gold)
```bash
# Dry run FIRST — always
wp search-replace 'https://old-domain.com' 'https://new-domain.com' --dry-run

# Real run (handles serialized data correctly)
wp search-replace 'https://old-domain.com' 'https://new-domain.com' --all-tables --skip-columns=guid

# Replace with HTTPS
wp search-replace 'http://example.com' 'https://example.com' --all-tables --skip-columns=guid
```

### Database
```bash
wp db export backup-$(date +%F).sql
wp db import backup.sql
wp db optimize
wp db repair
wp db size --tables
```

### Plugins & Themes
```bash
wp plugin list
wp plugin install elementor --activate
wp plugin update --all
wp plugin deactivate --all   # super useful for debugging
wp theme activate twentytwentyfour
```

### Users
```bash
wp user create john john@example.com --role=editor --user_pass=temp123
wp user update admin --user_pass=NEWPASS
wp user list
```

### Cache & Rewrites
```bash
wp cache flush
wp rewrite flush
wp transient delete --all
```

### Cron
```bash
wp cron event list
wp cron event run --due-now
```

---

## 2. Manual Migration Checklist (cPanel ↔ cPanel or any host)

**Pre-migration**
- [ ] Take full DB export (`wp db export` or phpMyAdmin)
- [ ] Take full files backup (zip wp-content + wp-config.php + .htaccess)
- [ ] Note PHP version, MySQL version on source
- [ ] Document plugin list & active theme
- [ ] Confirm DNS TTL is low (300s) at least 24h before switching

**On the new host**
- [ ] Create database + DB user, grant ALL privileges
- [ ] Upload files via FTP/SFTP or File Manager (preserve permissions)
- [ ] Import SQL via phpMyAdmin or `wp db import`
- [ ] Edit wp-config.php: DB_NAME, DB_USER, DB_PASSWORD, DB_HOST, table prefix, salts
- [ ] Set file permissions: 755 dirs, 644 files, 600 wp-config.php
- [ ] Run search-replace for the domain (see WP-CLI section)
- [ ] Set Site URL & Home URL (Settings → General, or via WP-CLI)

**Post-migration**
- [ ] Flush permalinks (Settings → Permalinks → Save)
- [ ] Test: homepage, a single post, a page, login, admin area, search, contact form
- [ ] Test on mobile + incognito
- [ ] Re-install/reconnect SSL certificate
- [ ] Reconfigure SMTP (mail will break otherwise)
- [ ] Reconfigure caching plugin (paths often differ)
- [ ] Reconfigure CDN (purge cache)
- [ ] Update DNS A record / nameservers
- [ ] Wait for propagation, verify with `dig` or whatsmydns.net
- [ ] Keep old site live for 7 days as fallback

---

## 3. DNS Records Cheatsheet

| Record | Purpose | Example Value |
|--------|---------|---------------|
| **A** | Maps domain to IPv4 | `@  →  192.0.2.1` |
| **AAAA** | Maps domain to IPv6 | `@  →  2001:db8::1` |
| **CNAME** | Alias one domain to another | `www  →  example.com` |
| **MX** | Mail server | `@  →  10 mail.example.com` |
| **TXT** | Verification / SPF / DKIM / DMARC | (see below) |
| **NS** | Nameservers | `ns1.host.com` |

### Email Authentication Records
```
SPF (TXT @):
v=spf1 include:_spf.google.com include:zoho.com ~all

DKIM (TXT, selector varies):
v=DKIM1; k=rsa; p=MIGfMA0GCSqGSIb3DQEBA...

DMARC (TXT _dmarc):
v=DMARC1; p=quarantine; rua=mailto:dmarc@example.com; pct=100
```

### Propagation
- TTL controls how long DNS is cached. Lower to **300 seconds** 24h before any major change.
- Verify: `dig example.com`, `dig MX example.com`, or whatsmydns.net

---

## 4. SMTP Configurations (for WP Mail SMTP / FluentSMTP)

### Google Workspace (via App Password)
```
Host:       smtp.gmail.com
Port:       587
Encryption: TLS
Username:   you@yourdomain.com
Password:   [16-char App Password from Google Account → Security]
From email: you@yourdomain.com
```

### Zoho Mail
```
Host:       smtp.zoho.com
Port:       587
Encryption: TLS
Username:   you@yourdomain.com
Password:   [Zoho password or App Password]
```

### cPanel Mail (built-in)
```
Host:       mail.yourdomain.com
Port:       465 (SSL) or 587 (TLS)
Encryption: SSL or TLS
Username:   you@yourdomain.com
Password:   [the email account password]
```

### Brevo (Sendinblue) — best for transactional
```
Host:       smtp-relay.brevo.com
Port:       587
Encryption: TLS
Username:   [your Brevo SMTP login]
Password:   [your SMTP key]
```

---

## 5. SEO Meta Templates (use when creating any new page)

### Format I always deliver for a new page:
```
URL slug:         /service-name-city/
Meta title:       [Primary Keyword] | [Brand or Benefit] (≤60 chars)
Meta description: [Hook] [What you offer] [CTA]. (140–160 chars)
Primary keyword:  ...
Secondary KWs:    ..., ..., ...
H1:               (one H1, contains primary keyword naturally)
Internal links:   2–3 relevant existing pages to link FROM and TO
Schema:           Article / Service / LocalBusiness / FAQ / Product
```

### Examples

**Service page**
```
Slug:  /wordpress-development-karachi/
Title: WordPress Development Services in Karachi | YourBrand
Desc:  Custom WordPress development, Elementor builds & speed optimization 
       in Karachi. Free quote in 24 hours. View our portfolio.
```

**Blog post**
```
Slug:  /how-to-speed-up-wordpress/
Title: How to Speed Up WordPress: 12 Proven Fixes (2026 Guide)
Desc:  Cut your WordPress load time below 2 seconds with these 12 tested 
       speed-up tactics. GTmetrix & PageSpeed-friendly. Step-by-step.
```

---

## 6. Speed Optimization Checklist (for GTmetrix & PageSpeed green scores)

### Quick wins (do these first)
- [ ] Upgrade to **PHP 8.2+** (cPanel → MultiPHP Manager)
- [ ] Install a caching plugin: **WP Rocket** (paid, best) or **LiteSpeed Cache** (free if on LiteSpeed server)
- [ ] Enable **Cloudflare** (free plan is fine), proxy on
- [ ] Convert images to **WebP** via ShortPixel or Imagify
- [ ] Enable **lazy loading** for images & iframes
- [ ] Remove unused plugins; deactivate is not enough — delete

### Render-blocking & Core Web Vitals
- [ ] Defer non-critical JS
- [ ] Inline critical CSS, defer the rest
- [ ] Preload key fonts: `<link rel="preload" as="font" crossorigin>`
- [ ] Self-host Google Fonts (don't load from fonts.googleapis.com)
- [ ] Remove jQuery Migrate if not needed
- [ ] Set explicit `width` and `height` on images (fixes CLS)
- [ ] Reserve space for ads/embeds (fixes CLS)
- [ ] Preconnect to third-party origins: `<link rel="preconnect">`

### Database & hosting
- [ ] Clean post revisions, transients, spam comments (WP-Optimize)
- [ ] Enable OPcache (host-level)
- [ ] Add Redis or Memcached if available
- [ ] Move to a faster host if TTFB > 600ms (Kinsta, Cloudways, Rocket.net)

### Common GTmetrix grade-killers
| Issue | Fix |
|-------|-----|
| Large LCP | Optimize hero image, preload it, use WebP |
| High CLS | Add image dimensions, reserve embed space |
| Reduce unused JS | Asset CleanUp or Perfmatters per-page rules |
| Avoid enormous DOM | Simplify Elementor sections, reduce nesting |
| Serve images in next-gen formats | WebP via image plugin |
| Eliminate render-blocking | WP Rocket → File Optimization → Optimize CSS Delivery |

---

## 7. Useful PHP Snippets (drop in child theme's functions.php)

### Enqueue scripts properly
```php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('child-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script(
        'child-main',
        get_stylesheet_directory_uri() . '/assets/main.js',
        ['jquery'],
        '1.0.0',
        true
    );
});
```

### Disable XML-RPC (security)
```php
add_filter('xmlrpc_enabled', '__return_false');
```

### Remove WP version from head
```php
remove_action('wp_head', 'wp_generator');
```

### Custom REST endpoint
```php
add_action('rest_api_init', function () {
    register_rest_route('myapp/v1', '/hello', [
        'methods'  => 'GET',
        'callback' => function () {
            return ['msg' => 'Hello'];
        },
        'permission_callback' => '__return_true',
    ]);
});
```

---

## 8. My Preferred Stack (edit to your taste)

- **Local dev:** LocalWP
- **Page builder:** Elementor Pro
- **Custom fields:** ACF Pro
- **Caching:** WP Rocket
- **Image opt:** ShortPixel
- **SEO:** Rank Math
- **Forms:** Fluent Forms
- **Security:** Wordfence (free) + 2FA
- **SMTP:** FluentSMTP
- **Backups:** UpdraftPlus
- **CDN:** Cloudflare
- **Migration:** WP-CLI + Duplicator Pro as fallback
