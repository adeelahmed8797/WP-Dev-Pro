# H2H Dating — Design System & Style Guide

> Reference this document when building in Elementor. Paste all hex codes directly into
> Elementor's Global Colors panel (Elementor → Site Settings → Global Colors).

---

## 1. Color Palette

### Primary Colors

| Token         | Hex       | Usage                                           |
|---------------|-----------|-------------------------------------------------|
| Primary       | `#1E3A6E` | Nav, headings, primary text, icon backgrounds   |
| Primary Light | `#2B52A0` | Hover states, gradient fills, card borders      |
| Primary Dark  | `#0D2045` | Hero/CTA dark backgrounds                       |

### Accent Colors

| Token          | Hex       | Usage                                            |
|----------------|-----------|--------------------------------------------------|
| Secondary      | `#E8536A` | Hearts, rose accents, hover highlights           |
| Secondary Light| `#F27A8E` | Soft rose tints, hero gradient text              |
| Accent         | `#F59E0B` | Primary CTA buttons, star ratings, eyebrow chips |
| Accent Light   | `#FCD34D` | Hover glow, CTA dark-bg text highlights          |

### Neutrals

| Token        | Hex       | Usage                         |
|--------------|-----------|-------------------------------|
| Text Dark    | `#0F172A` | Headings, bold copy           |
| Text Body    | `#475569` | Body paragraphs, card text    |
| Text Muted   | `#94A3B8` | Captions, meta, placeholders  |
| Border       | `#E2E8F0` | Card borders, dividers        |
| Background   | `#F7F8FC` | Alternating section fills     |
| White        | `#FFFFFF` | Card backgrounds              |
| Footer Dark  | `#0A1628` | Footer background             |

### Functional

| Token   | Hex       | Usage                   |
|---------|-----------|-------------------------|
| Success | `#22C55E` | Verified badge, checkmarks |

### Gradients (copy for Elementor Background → Gradient)

```
Hero / CTA dark background:
  135deg → #0D2045 (0%) → #1E3A6E (45%) → #2B52A0 (100%)

Headline gradient text:
  90deg → #F27A8E (0%) → #FCD34D (100%)

Feature card top bar:
  90deg → #1E3A6E (0%) → #E8536A (100%)

Step bubble 1 (Sign Up):
  135deg → #1E3A6E → #2B52A0

Step bubble 2 (Verify):
  135deg → #E8536A → #F27A8E

Step bubble 3 (Connect):
  135deg → #F59E0B → #FCD34D
```

---

## 2. Typography

### Font Stack

| Role          | Family   | Weights Used  | CDN Import                                         |
|---------------|----------|---------------|----------------------------------------------------|
| Display / Headings | Poppins  | 700, 800, 900 | Google Fonts — already in HTML mockup link tag    |
| Body / UI     | Inter    | 400, 500, 600 | Google Fonts — already in HTML mockup link tag    |

**Elementor Global Fonts:**
- Set "Primary" font → Poppins
- Set "Secondary" font → Inter
- Paste this in Elementor → Site Settings → Custom CSS to import both:

```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600&display=swap');
```

### Type Scale

| Name        | Size (desktop) | Size (mobile) | Weight | Line Height | Usage              |
|-------------|---------------|---------------|--------|-------------|---------------------|
| Display 1   | 64px          | 36px          | 800    | 1.12        | H1 hero headline    |
| Display 2   | 44px          | 28px          | 700    | 1.20        | Section H2 headings |
| Display 3   | 32px          | 22px          | 700    | 1.25        | Card H3 / steps     |
| Lead        | 19px          | 16px          | 400    | 1.70        | Hero/section subtext|
| Body        | 16px          | 15px          | 400    | 1.65        | Card paragraphs     |
| Small       | 14px          | 13px          | 500    | 1.50        | Badges, labels      |
| Caption     | 12px          | 12px          | 500    | 1.40        | Footer, disclaimers |

**Letter spacing:**
- Display 1 & 2: `-0.02em`
- Labels / eyebrows: `+0.08em`
- Nav links: `0`

---

## 3. Spacing Scale

| Token  | Value | Use                                |
|--------|-------|------------------------------------|
| xs     | 8px   | Icon gaps, inline spacing          |
| sm     | 16px  | Between elements in a card         |
| md     | 24px  | Card inner padding, grid gaps      |
| lg     | 48px  | Between sections' internal blocks  |
| xl     | 80px  | Section top/bottom padding         |
| 2xl    | 120px | Major section padding (desktop)    |

---

## 4. Border Radius

| Token | Value   | Usage                             |
|-------|---------|-----------------------------------|
| sm    | 8px     | Badges, small chips, social icons |
| md    | 14px    | Feature icons, float cards        |
| lg    | 20px    | Testimonial & feature cards       |
| xl    | 32px    | Hero image, large containers      |
| pill  | 100px   | All buttons, eyebrow labels       |

---

## 5. Shadows

| Token      | Value                                           | Usage              |
|------------|-------------------------------------------------|--------------------|
| shadow-sm  | `0 1px 3px rgba(0,0,0,.08)`                    | Subtle lifts       |
| shadow-md  | `0 4px 16px rgba(0,0,0,.10)`                   | Button hover       |
| shadow-lg  | `0 10px 40px rgba(0,0,0,.14)`                  | Float cards, modal |
| shadow-card| `0 2px 12px rgba(30,58,110,.08)`               | Feature & testimonial cards |

---

## 6. Button Styles

### Primary CTA (Join Free / Join Now)
```
Background:    #F59E0B
Text:          #0F172A (dark, for contrast on amber)
Border:        #F59E0B
Border-radius: 100px (pill)
Padding:       14px 30px (standard) / 18px 40px (large)
Font:          Poppins 600 15px / 17px
Hover:         Background #E8940A, translateY(-2px), shadow-md
```

### Outline Light (on dark backgrounds)
```
Background:    transparent
Text:          #FFFFFF
Border:        rgba(255,255,255,0.6) → #FFFFFF on hover
Border-radius: 100px
Hover:         Background rgba(255,255,255,0.12)
```

### Outline Dark (on light backgrounds)
```
Background:    transparent
Text:          #1E3A6E
Border:        #1E3A6E
Border-radius: 100px
Hover:         Background #1E3A6E, Text #FFFFFF
```

### Nav "Join Free" button
```
Background:    #E8536A
Text:          #FFFFFF
Border-radius: 100px
Padding:       10px 22px
Font:          Poppins 600 14px
Hover:         Background #d44460
```

---

## 7. Section Layout Pattern

Every section follows this pattern in Elementor:

```
Full-width Container (100% width, padding 120px 0 desktop / 64px 0 tablet / 48px 0 mobile)
  └── Inner Container (max-width 1200px, auto horizontal margin, padding 0 24px)
       ├── Section Header (max-width 640px, text-align center, margin-bottom 60px)
       │    ├── Label chip (eyebrow)
       │    ├── H2 heading
       │    └── Lead paragraph
       └── Content grid / cards
```

---

## 8. Motion Effects (Elementor → Advanced → Motion Effects)

| Element        | Effect         | Settings                          |
|----------------|----------------|-----------------------------------|
| Section headings | Fade In Up   | Duration: 600ms, Delay: 0ms      |
| Feature cards  | Fade In Up     | Duration: 600ms, Delay: 100ms each (staggered) |
| Hero copy      | Fade In Left   | Duration: 700ms                   |
| Hero visual    | Fade In Right  | Duration: 700ms, Delay: 200ms    |
| Step bubbles   | Zoom In        | Duration: 500ms                   |
| Testimonial cards | Fade In Up  | Duration: 600ms, Delay: 150ms each |

**Hover animations on cards:**
- Transform: `translateY(-6px)` on hover
- Box shadow: increase on hover
- Set via Elementor → Advanced → Hover Animation → Lift

---

## 9. Accessibility Notes (WCAG AA)

| Combination                    | Contrast Ratio | WCAG AA |
|--------------------------------|---------------|---------|
| `#0F172A` on `#FFFFFF`        | 19.6:1        | ✅ Pass |
| `#475569` on `#FFFFFF`        | 5.9:1         | ✅ Pass |
| `#FFFFFF` on `#1E3A6E`        | 8.3:1         | ✅ Pass |
| `#0F172A` on `#F59E0B` (CTA)  | 7.1:1         | ✅ Pass |
| `#FFFFFF` on `#E8536A`        | 3.9:1         | ✅ Pass (large text) |
| `#FCD34D` on `#0D2045`        | 9.4:1         | ✅ Pass |

**Rules:**
- One `<h1>` per page (hero headline only)
- All sections use `<h2>` for section headings, `<h3>` for card headings
- All images must have descriptive `alt` text
- All icon-only buttons need `aria-label`
- Focus states: add `outline: 3px solid #F59E0B; outline-offset: 2px` for keyboard nav
