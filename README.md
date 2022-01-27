# Sync Access Server

With the Sync Access Server, an eWeLink account's linked devices can be controlled by multiple users concurrently. Depending on individual permissions, a user can either have remote access to devices from anywhere in the world, or restricted to only operate when their device is connected a specific local area network (requires a deployment of [sync-access-lan](https://github.com/jasonsync/sync-access-lan) on a LAN connected computer). Individual device permissions can also be managed from the Sync Access Server.

### This repo's purpose: 

* If you want multiple devices to control an eWeLink account via a web dashboard
* Deploy as a central web server to configure and administer multiple sync-access-lan controller onsite deployments.

### Web server capabilities

* Users connect to the remote web deployment & log in.
* Depending on user permissions, it can allow individual users to either control eWeLink remotely (through web hosted dashboard) OR it will redirect them to a web instance on their LAN controller (useful if you want specific users not to be able to control doors/gates unless they are on site physically)
* Users can install the web app to their devices as a PWA (settings -> save to home screen)

### LAN controller management:
* Serves as an orchestration server for individually deployed [sync-access-lan](https://github.com/jasonsync/sync-access-lan) instances, which periodically announce their identity, as well as internal & external IP addresses (sort of like Dynamic DNS), and are given updated configuration if necessary. Having the internal IP addresses gives the  Sync Access Server the ability to redirect users to the [sync-access-lan](https://github.com/jasonsync/sync-access-lan) URLs if they only have LAN permissions.
