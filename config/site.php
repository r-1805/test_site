<?php
return json_decode(<<<'JSON'
{
  "html_lang": "it",
  "brand": "test",
  "brand_initials": "T",
  "footer_blurb": "Microsito pubblico generato per una presenza locale credibile, contatti coerenti e documentazione legale allineata al mercato.",
  "year": 2026,
  "company": {
    "brand": "test",
    "brand_display": "Test",
    "domain": "test.com",
    "legal_entity_name": "Morucci-Gradenigo e figli",
    "email": "info@test.com",
    "phone": "+39 081 305 6190",
    "address": "Incrocio Imelda, 79 Appartamento 0, 09092 Sant'Agapito Scalo",
    "hours": "Lun-Sab 09:00-19:00",
    "social_handles": {
      "facebook": "test_facebook",
      "twitter": "test_twitter",
      "instagram": "test_instagram"
    }
  },
  "tel_href": "+390813056190",
  "contact_heading": "Contatto",
  "legal_heading": "Conformita",
  "cookie_title": "Politica sui cookie",
  "cookie_text": "Usiamo cookie essenziali e storage locale per mantenere stabile la navigazione, ricordare le preferenze e proteggere le funzioni di base.",
  "cookie_accept": "Accetta",
  "cookie_link": "Leggi la cookie policy",
  "extra_head_html": "",
  "nav": [
    {
      "file": "index.php",
      "label": "Home"
    },
    {
      "file": "about.php",
      "label": "Chi siamo"
    },
    {
      "file": "services.php",
      "label": "Servizi"
    },
    {
      "file": "contact.php",
      "label": "Contatto"
    }
  ],
  "legal_links": [
    {
      "file": "privacy-policy.php",
      "label": "Informativa sulla privacy"
    },
    {
      "file": "cookie-policy.php",
      "label": "Politica sui cookie"
    },
    {
      "file": "terms-of-service.php",
      "label": "Termini di servizio"
    },
    {
      "file": "legal-notice.php",
      "label": "Nota legale"
    },
    {
      "file": "disclaimer.php",
      "label": "Disclaimer"
    }
  ]
}
JSON, true);
