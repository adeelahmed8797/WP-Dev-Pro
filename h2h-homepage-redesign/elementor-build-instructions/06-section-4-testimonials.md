# Step 6 — Section 4: Testimonials & Social Proof (h2h-section-4-testimonials)

**Where to build:** Below Section 3 on the homepage

---

## Overview

Light-background section with:
- Section header with amber eyebrow chip
- 3-column testimonial card grid (Damari Kent, Larry T., Michael Malroy)
- Each card: stars → blockquote → author (avatar initial + name + location + verified badge)
- Cards get a subtle lift on hover

---

## Container Structure

```
Container: section-testimonials (full-width, bg #F7F8FC)
  └── Container: testimonials-inner (max-width 1200px)
        ├── Container: section-header (centered)
        └── Container: testimonials-grid (flex row, 3 cols)
              ├── Container: testimonial-card-1  (Damari Kent)
              ├── Container: testimonial-card-2  (Larry T.)
              └── Container: testimonial-card-3  (Michael Malroy)
```

---

## Step-by-Step Build

### 1. Section Root Container

- **Background:** `#F7F8FC`
- **Padding:** 120px 0 (desktop), 80px 0 (tablet), 64px 0 (mobile)
- **Width:** 100%

### 2. Inner Container

- **Max-width:** 1200px, Width: 100%, Margin: 0 auto, Padding: 0 24px
- **Layout:** Flex, Column, Gap: 52px

### 3. Section Header

Max-width 640px, centered, text-align center.

**A. Eyebrow chip — amber style:**
```html
<span style="
  display:inline-flex; align-items:center; gap:6px;
  background:rgba(245,158,11,.12); color:#92600A;
  font-family:'Poppins',sans-serif; font-size:12px; font-weight:600;
  letter-spacing:.08em; text-transform:uppercase;
  padding:6px 14px; border-radius:100px;
">
  Member Stories
</span>
```

**B. H2 — use Text Editor for gradient word:**
```html
<h2 style="font-family:'Poppins',sans-serif;font-size:44px;font-weight:700;letter-spacing:-0.02em;color:#0F172A;line-height:1.2;margin-top:16px;">
  Real People. <span style="background:linear-gradient(135deg,#E8536A 0%,#F59E0B 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Real Results.</span>
</h2>
```

**C. Lead text:**
- Content: `Don't take our word for it — hear from members who found genuine connections here.`
- Inter 400, 19px → 16px mobile, `#475569`

### 4. Testimonials Grid Container

- **Layout:** Flex, Row, Wrap, Gap: 24px, Align: Stretch

3 child Containers, each:
- **Flex Basis:** calc(33.33% - 16px), Flex Grow: 1
- Tablet: calc(100% - 0px) → stack vertically

### 5. Individual Testimonial Card

Each card Container:
- **Background:** `#FFFFFF`
- **Border:** 1px solid `#E2E8F0`
- **Border Radius:** 20px
- **Box Shadow:** `0 2px 12px rgba(30,58,110,.08)`
- **Padding:** 32px 28px
- **Layout:** Flex, Column, Gap: 20px, Justify: Space Between
- Custom CSS for hover:
  ```css
  selector {
    transition: transform .25s cubic-bezier(.4,0,.2,1), box-shadow .25s cubic-bezier(.4,0,.2,1);
  }
  selector:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 16px rgba(0,0,0,.10);
  }
  ```

**Inside each card, add these widgets:**

**A. Star Rating — Text Editor:**
```html
<div style="display:flex;gap:3px;color:#F59E0B;font-size:18px;" aria-label="5 out of 5 stars">
  ★★★★★
</div>
```

**B. Quote — Text Editor:**
```html
<!-- Card 1 -->
<div style="position:relative;">
  <span style="position:absolute;top:-16px;left:-8px;font-size:64px;color:rgba(30,58,110,.08);font-family:Georgia,serif;line-height:1;">"</span>
  <p style="font-family:'Inter',sans-serif;font-size:15px;color:#475569;line-height:1.75;font-style:italic;position:relative;z-index:1;">
    I was so tired of apps charging me just to see who liked me. H2H is completely different — I can message anyone, see everything, and the people here are actually real. Met someone special after just 2 weeks.
  </p>
</div>

<!-- Card 2 -->
<div style="position:relative;">
  <span style="position:absolute;top:-16px;left:-8px;font-size:64px;color:rgba(30,58,110,.08);font-family:Georgia,serif;line-height:1;">"</span>
  <p style="font-family:'Inter',sans-serif;font-size:15px;color:#475569;line-height:1.75;font-style:italic;position:relative;z-index:1;">
    The human verification process actually made me feel safe. No fake profiles, no scammers trying to hit me up. Just genuine people looking for real relationships. The video call feature sealed the deal.
  </p>
</div>

<!-- Card 3 -->
<div style="position:relative;">
  <span style="position:absolute;top:-16px;left:-8px;font-size:64px;color:rgba(30,58,110,.08);font-family:Georgia,serif;line-height:1;">"</span>
  <p style="font-family:'Inter',sans-serif;font-size:15px;color:#475569;line-height:1.75;font-style:italic;position:relative;z-index:1;">
    Finally — a dating site that doesn't treat you like a wallet. No pay-to-message, no pay-to-see-likes, nothing. The community is small which actually makes it better. Everyone is genuinely here to connect.
  </p>
</div>
```

**C. Author Row — Text Editor:**

Use a border-top divider above the author block:

```html
<!-- Card 1 — Damari Kent -->
<div style="display:flex;align-items:center;gap:14px;padding-top:16px;border-top:1px solid #E2E8F0;">
  <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#2B52A0,#E8536A);display:flex;align-items:center;justify-content:center;font-family:'Poppins',sans-serif;font-size:18px;font-weight:700;color:#fff;flex-shrink:0;" aria-hidden="true">D</div>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:15px;font-weight:600;color:#0F172A;margin-bottom:2px;">Damari Kent</strong>
    <span style="font-size:12px;color:#94A3B8;">Atlanta, GA</span><br>
    <span style="display:inline-flex;align-items:center;gap:4px;background:rgba(34,197,94,.1);color:#16A34A;font-family:'Inter',sans-serif;font-size:11px;font-weight:600;padding:3px 8px;border-radius:100px;margin-top:4px;">✓ Verified Member</span>
  </div>
</div>

<!-- Card 2 — Larry T. -->
<div style="display:flex;align-items:center;gap:14px;padding-top:16px;border-top:1px solid #E2E8F0;">
  <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#F59E0B,#E8536A);display:flex;align-items:center;justify-content:center;font-family:'Poppins',sans-serif;font-size:18px;font-weight:700;color:#fff;flex-shrink:0;" aria-hidden="true">L</div>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:15px;font-weight:600;color:#0F172A;margin-bottom:2px;">Larry T.</strong>
    <span style="font-size:12px;color:#94A3B8;">Chicago, IL</span><br>
    <span style="display:inline-flex;align-items:center;gap:4px;background:rgba(34,197,94,.1);color:#16A34A;font-family:'Inter',sans-serif;font-size:11px;font-weight:600;padding:3px 8px;border-radius:100px;margin-top:4px;">✓ Verified Member</span>
  </div>
</div>

<!-- Card 3 — Michael Malroy -->
<div style="display:flex;align-items:center;gap:14px;padding-top:16px;border-top:1px solid #E2E8F0;">
  <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#1E3A6E,#E8536A);display:flex;align-items:center;justify-content:center;font-family:'Poppins',sans-serif;font-size:18px;font-weight:700;color:#fff;flex-shrink:0;" aria-hidden="true">M</div>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:15px;font-weight:600;color:#0F172A;margin-bottom:2px;">Michael Malroy</strong>
    <span style="font-size:12px;color:#94A3B8;">Houston, TX</span><br>
    <span style="display:inline-flex;align-items:center;gap:4px;background:rgba(34,197,94,.1);color:#16A34A;font-family:'Inter',sans-serif;font-size:11px;font-weight:600;padding:3px 8px;border-radius:100px;margin-top:4px;">✓ Verified Member</span>
  </div>
</div>
```

### 6. Motion Effects

**Section header:** Fade In Up, 600ms
**Card 1:** Fade In Up, 600ms, 0ms delay
**Card 2:** Fade In Up, 600ms, 150ms delay
**Card 3:** Fade In Up, 600ms, 300ms delay

### 7. Responsive Adjustments

**Tablet (1024px):**
- Grid: 1 column or 2 columns (wrap first — 2 cards row 1, 1 card row 2 centered)
- Recommended: switch to 1-column at tablet for readability

**Mobile (767px):**
- 1 column, full width
- Section padding: 64px 0
- H2: 28px

---

## Optional: Replace Cards with Elementor Testimonial Carousel

If you prefer a slider instead of grid (same data):

1. Add a **Testimonial Carousel** widget (Elementor Pro)
2. Set items: 3 testimonials (same content as above)
3. Show: 1 slide on mobile, 2 on tablet, 3 on desktop
4. Autoplay: 5 seconds, pause on hover
5. Arrows: style in primary blue, dots style in accent amber

---

## Author Photo Specifications

If real photos become available:
- **File format:** WebP
- **Dimensions:** 96×96px (displayed at 48px, 2x for retina)
- **Shape:** Use Elementor Image widget with border-radius: 50%
- **Alt text:** `[Name] — H2H Dating verified member`
- Replace the initial-letter avatar divs above with `<img>` tags
