# Step 0 — Elementor Setup & Global Styles

Complete this step BEFORE building any templates. These settings cascade to every
widget on the site.

---

## 0.1 Install & Activate Plugins

Ensure these are active in WordPress:
- **Elementor Pro** (required for Theme Builder, Containers, Loop Grid)
- **Ultimate Member** (for `/register/` and `/login/` shortcodes)
- No third-party Elementor add-ons are needed for this design

---

## 0.2 Enable Flexbox Containers

Elementor → Settings → Features → Enable Flexbox Container → **ON**

This enables the modern Container-based layout system (required for this build).
Do NOT use legacy Sections/Columns.

---

## 0.3 Import Google Fonts

Elementor → Site Settings → Custom CSS → paste:

```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600&display=swap');
```

---

## 0.4 Set Global Fonts

**Elementor → Site Settings → Typography:**

| Role          | Family  | Weight | Size  |
|---------------|---------|--------|-------|
| Primary       | Poppins | 800    | 64px  |
| Secondary     | Poppins | 700    | 44px  |
| Text          | Inter   | 400    | 16px  |
| Accent        | Poppins | 600    | 15px  |

---

## 0.5 Set Global Colors

**Elementor → Site Settings → Global Colors → + Add Color** (create all below):

| Name             | Hex       |
|------------------|-----------|
| Primary          | `#1E3A6E` |
| Primary Light    | `#2B52A0` |
| Primary Dark     | `#0D2045` |
| Secondary        | `#E8536A` |
| Secondary Light  | `#F27A8E` |
| Accent           | `#F59E0B` |
| Accent Light     | `#FCD34D` |
| Success          | `#22C55E` |
| Text Dark        | `#0F172A` |
| Text Body        | `#475569` |
| Text Muted       | `#94A3B8` |
| Border           | `#E2E8F0` |
| BG Section       | `#F7F8FC` |
| Footer Dark      | `#0A1628` |

---

## 0.6 Global Custom CSS

**Elementor → Site Settings → Custom CSS → append:**

```css
/* ── Reset & box model ── */
*, *::before, *::after { box-sizing: border-box; }

/* ── Smooth scroll ── */
html { scroll-behavior: smooth; }

/* ── Font smoothing ── */
body { -webkit-font-smoothing: antialiased; }

/* ── Utility: gradient text ── */
.text-gradient {
  background: linear-gradient(90deg, #F27A8E 0%, #FCD34D 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* ── Utility: pill border-radius ── */
.radius-pill { border-radius: 100px !important; }

/* ── Utility: section label chip ── */
.section-label {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(30,58,110,.08);
  color: #1E3A6E;
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: .08em;
  text-transform: uppercase;
  padding: 6px 14px;
  border-radius: 100px;
}
.section-label.rose  { background: rgba(232,83,106,.1);  color: #E8536A; }
.section-label.amber { background: rgba(245,158,11,.12); color: #92600A; }

/* ── Float card animation ── */
@keyframes h2h-float {
  0%,100% { transform: translateY(0); }
  50%      { transform: translateY(-8px); }
}
.h2h-float-1 { animation: h2h-float 4.0s ease-in-out infinite; }
.h2h-float-2 { animation: h2h-float 4.0s ease-in-out 1.5s infinite; }
.h2h-float-3 { animation: h2h-float 4.0s ease-in-out 0.75s infinite; }

/* ── Feature card hover bar ── */
.h2h-feature-card {
  position: relative;
  overflow: hidden;
  transition: transform .25s cubic-bezier(.4,0,.2,1), box-shadow .25s cubic-bezier(.4,0,.2,1);
}
.h2h-feature-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, #1E3A6E, #E8536A);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform .25s cubic-bezier(.4,0,.2,1);
}
.h2h-feature-card:hover { transform: translateY(-6px); box-shadow: 0 10px 40px rgba(0,0,0,.14); }
.h2h-feature-card:hover::before { transform: scaleX(1); }

/* ── How-it-works connector line ── */
.h2h-how-connector {
  position: absolute;
  top: 48px;
  left: calc(100% / 6);
  right: calc(100% / 6);
  height: 2px;
  background: linear-gradient(90deg, #1E3A6E 0%, #E8536A 50%, #F59E0B 100%);
  pointer-events: none;
}

/* ── Trust badge ── */
.h2h-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: rgba(255,255,255,.85);
  font-size: 13px;
  font-weight: 500;
}

/* ── Accessibility: focus visible ── */
a:focus-visible,
button:focus-visible {
  outline: 3px solid #F59E0B;
  outline-offset: 2px;
  border-radius: 4px;
}

/* ── Hero radial glows ── */
.h2h-hero-glow-rose {
  position: absolute;
  top: -200px; right: -200px;
  width: 700px; height: 700px;
  background: radial-gradient(circle, rgba(232,83,106,.18) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}
.h2h-hero-glow-amber {
  position: absolute;
  bottom: -150px; left: -150px;
  width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(245,158,11,.12) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}
```

---

## 0.7 Responsive Breakpoints

**Elementor → Site Settings → Layout:**

| Breakpoint  | Value  |
|-------------|--------|
| Tablet      | 1024px |
| Mobile      | 767px  |

Always build Desktop first, then adjust Tablet, then Mobile via the breakpoint
switcher in the Elementor editor toolbar.

---

## 0.8 Ultimate Member Shortcodes Reference

Use these as needed inside Shortcode widgets:

| Purpose            | Shortcode                             |
|--------------------|---------------------------------------|
| Registration form  | `[ultimatemember form_id="YOUR_ID"]`  |
| Login form         | `[ultimatemember form_id="YOUR_ID"]`  |
| User profile       | `[ultimatemember]`                    |
| Members directory  | `[ultimatemember_directory]`          |

Find form IDs in: WordPress Admin → Ultimate Member → Forms.

All "Join Free" and "Sign Up" buttons link to `/register/`.
All "Sign In" buttons link to `/login/`.
After login, UM redirects to the profile/dashboard page automatically.
