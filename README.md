# Phoenix Staff
Custom theme for Phoenix Staff

## Developer
Alexander Persky
alexander@factor1studios.com
[factor1](http://factor1studios.com)
602.334.4806

## Vendor Assets

### Frameworks
[Foundaton for Sites 6](http://foundation.zurb.com/sites/docs/)

### Plugins

#### Notes
In the Gulpfile.js "Serve" task, be sure two things are present:
1. A server is setup and a local path is set. The proxy created by BrowserSync will depend on this in order to properly create the local URL
2. The local path is set in the `proxy` field. Right now it is set to `phx-staff:8888` because that is what it is on my local development. Be sure to replace it with your own path.

## Remote Repositories
Production:
```
ssh://phoenixstaff@64.91.237.141/home/phoenixstaff/repos/phx-staff.git
```
