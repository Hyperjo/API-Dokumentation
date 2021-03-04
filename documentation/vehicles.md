## Fahrzeuge

Mit dieser Funktion können alle Fahrzeuge eines Charakters abgefragt werden. Es kann jedoch nur abgefragt werden, welchen Fahrzeugtyp, mit welchem Kennzeichen der Charakter besitzt. Zerstörte Fahrzeuge werden nicht angezeigt.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `vehicles` benötigt. |
| version | `1` |
| request | `vehicles` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=vehicles&key=[KEY]`

### Rückgabe

```json
{
  "characterId": 2,
  "vehicles": [
    {
      "displayName": "Emperor (alt)",
      "categoryName": "Kompaktwagen",
      "numberPlate": "AJQU3PZ7"
    },
    {
      "displayName": "RatLoader",
      "categoryName": "Kompaktwagen",
      "numberPlate": "RE9BFV8E"
    },
    {
      "displayName": "GBurrito",
      "categoryName": "Van",
      "numberPlate": "5APL6KV8"
    },
    {
      "displayName": "Pariah",
      "categoryName": "Supersportwagen",
      "numberPlate": "7687PDG7"
    },
    {
      "displayName": "Dodo",
      "categoryName": "Flugzeug",
      "numberPlate": "W5Y3VXFC"
    },
  ]
}
```

### Changelog

- Seit Version 1 verfügbar.