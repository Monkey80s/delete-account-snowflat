# delete-account-snowflat
Plugin para Question2Answer que permite a los usuarios eliminar su propia cuenta, ayudando a cumplir con las normativas de privacidad de datos (RGPD/CCPA).

# Q2A Delete My Account (SnowFlat Compatible)

Un plugin moderno y visualmente llamativo para **Question2Answer (Q2A)** que añade un botón de eliminación de cuenta directamente en la página de perfil del usuario.

## ⚖️ Por qué es necesario implementar esto (Normatividad de Datos)

En la web actual, permitir que los usuarios eliminen su propia cuenta no es solo una buena práctica de experiencia de usuario (UX), sino una **obligación legal** en muchas jurisdicciones. Este plugin ayuda a tu foro Q2A a cumplir con las normativas de privacidad más estrictas:

* **RGPD (Reglamento General de Protección de Datos - Europa):** El Artículo 17 establece el **"Derecho al olvido"** (Right to Erasure). Los usuarios tienen el derecho absoluto de solicitar la eliminación de sus datos personales sin demora indebida. Obligar a un usuario a contactar a un administrador por correo para borrar su cuenta se considera un obstáculo innecesario; debe haber un mecanismo directo y accesible.
* **CCPA (Ley de Privacidad del Consumidor de California):** Otorga a los consumidores el derecho a solicitar la eliminación de la información personal que una empresa haya recopilado sobre ellos.
* **Leyes de Protección de Datos en Latinoamérica:** Países como Colombia (Ley 1581 de 2012), México (LFPDPPP) y Argentina (Ley 25.326) tienen principios similares donde el titular de los datos tiene derecho a la supresión de los mismos de las bases de datos en cualquier momento.

**Mantener cuentas de usuarios que ya no desean estar en tu plataforma aumenta tu responsabilidad y riesgo ante posibles brechas de seguridad. Este plugin automatiza el cumplimiento de estas normas.**

## ✨ Características

* **Cumplimiento Legal:** Facilita el "Derecho al olvido" para tus usuarios.
* **Diseño de Advertencia:** Incluye un marco estilo "cinta de precaución" (amarillo y negro) para evitar clics accidentales.
* **Botón Destacado:** Botón estilizado con gradiente Cian/Magenta para una alta visibilidad.
* **Doble Confirmación:** Utiliza una ventana modal de JavaScript para asegurar que la eliminación es intencional, ya que la acción es irreversible.
* **Compatible con SnowFlat:** Diseñado para integrarse perfectamente como una capa (layer) en el tema SnowFlat y derivados.
* **Estructura Moderna:** Utiliza `metadata.json` para definir la versión y el orden de carga (`after_db_init`).

## 🛠️ Instalación

1. Descarga el archivo `.zip` de este repositorio o clónalo.
2. Extrae la carpeta y renómbrala a `delete-account-snowflat`.
3. Sube la carpeta al directorio `qa-plugin/` de tu instalación de Question2Answer.
4. Ve a la sección de **Administración > Plugins** en tu sitio web Q2A y verifica que el plugin aparezca en la lista.
5. ¡Listo! Los usuarios ahora verán el recuadro de "Zona Peligrosa" en la página de su cuenta (`/account`).

## 📝 Licencia

Este proyecto está bajo la licencia [GPLv2](LICENSE).

## 👨‍💻 Autor

Desarrollado por **monkey**.


# Q2A Delete My Account (SnowFlat Compatible)

*(🇪🇸 [Leer en español](README-es.md))*

A modern and visually striking plugin for **Question2Answer (Q2A)** that adds an account deletion button directly to the user's profile page.

## ⚖️ Why this is necessary (Data Privacy Regulations)

In today's web, allowing users to delete their own account is not just a good User Experience (UX) practice, but a **legal obligation** in many jurisdictions. This plugin helps your Q2A forum comply with the strictest privacy regulations:

* **GDPR (General Data Protection Regulation - Europe):** Article 17 establishes the **"Right to Erasure"** (Right to be Forgotten). Users have the absolute right to request the deletion of their personal data without undue delay. Forcing a user to contact an administrator via email to delete their account is considered an unnecessary obstacle; there must be a direct and accessible mechanism.
* **CCPA (California Consumer Privacy Act):** Grants consumers the right to request the deletion of personal information that a business has collected about them.
* **Data Protection Laws in Latin America:** Countries like Colombia (Law 1581 of 2012), Mexico (LFPDPPP), and Argentina (Law 25.326) have similar principles where the data subject has the right to the deletion of their data from databases at any time.

**Keeping accounts of users who no longer wish to be on your platform increases your liability and risk in the event of possible security breaches. This plugin automates compliance with these regulations.**

## ✨ Features

* **Legal Compliance:** Facilitates the "Right to be Forgotten" for your users.
* **Warning Design:** Includes a "caution tape" style frame (yellow and black) to prevent accidental clicks.
* **Prominent Button:** Stylized button with a Cyan/Magenta gradient for high visibility.
* **Double Confirmation:** Uses a JavaScript modal window to ensure the deletion is intentional, as the action is irreversible.
* **SnowFlat Compatible:** Designed to integrate seamlessly as a layer in the SnowFlat theme and its derivatives.
* **Modern Structure:** Uses `metadata.json` to define the version and load order (`after_db_init`).

## 🛠️ Installation

1. Download the `.zip` file from this repository or clone it.
2. Extract the folder and rename it to `delete-account-snowflat`.
3. Upload the folder to the `qa-plugin/` directory of your Question2Answer installation.
4. Go to the **Admin > Plugins** section on your Q2A website and verify that the plugin appears in the list.
5. Done! Users will now see the "Danger Zone" box on their account page (`/account`).

## 📝 License

This project is licensed under the [GPLv2](LICENSE) license.

## 👨‍💻 Author

Developed by **monkey**.
