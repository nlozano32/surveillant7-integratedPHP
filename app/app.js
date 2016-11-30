

var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "app/modules/control/views/principal.html"
    })

    .when("/daily_period_standard", {
        templateUrl : "app/modules/setting/views/form_daily_periods.php"
    })
    .when("/daily_period_standardInt", {
        templateUrl : "app/modules/setting/views/form_daily_periodsInt.html"
    })
    .when("/perEstIntDet", {
        templateUrl : "app/modules/setting/views/form_daily_periodsInt_det.html"
    })
    .when("/output", {
        templateUrl : "app/modules/setting/views/form_output.php"
    })
    .when("/sensors", {
        templateUrl : "app/modules/setting/views/form_sensors.html"
    })
    .when("/virtual_sensors", {
        templateUrl : "app/modules/setting/views/form_virtual_sensors.html"
    })
      .when("/cumul_sensors", {
        templateUrl : "app/modules/setting/views/form_cumul_sensors.html"
    })
      .when("/service_man", {
        templateUrl : "app/modules/services/views/form_services_man.html"
    })
      .when("/service_man_det", {
        templateUrl : "app/modules/services/views/form_services_man_det.html"
    })
     .when("/service_cas_zon", {
        templateUrl : "app/modules/services/views/form_services_cascade_zone.html"
    })
     .when("/service_pid", {
        templateUrl : "app/modules/services/views/form_services_pid.html"
    })

     .when("/service_pid_cas_zone", {
        templateUrl : "app/modules/services/views/form_services_pid_cas_zone.html"
    })

    .when("/services_cascade_cascade", {
        templateUrl : "app/modules/services/views/form_services_cascade_cascade.html"
    })

    .when("/services_pid_cas_pid", {
        templateUrl : "app/modules/services/views/form_services_pid_cas_pid.html"
    })

    .when("/alarms", {
        templateUrl : "app/modules/alarm/views/form_alarms.html"
    })

    .when("/limit", {
        templateUrl : "app/modules/limits/views/form_limit.html"
    })

    .when("/global_limit", {
        templateUrl : "app/modules/limits/views/form_global_limit.php"
    });
});
