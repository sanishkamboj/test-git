export const config = {
  api: {
    baseUrl: "https://api.example.com",
    timeout: 5000,
    retries: 3,
  },
  auth: {
    tokenExpiry: 3600,
    refreshEnabled: false,
  },
  features: {
    darkMode: false,
    notifications: false,
    maintenanceMode: true,
  },
};
