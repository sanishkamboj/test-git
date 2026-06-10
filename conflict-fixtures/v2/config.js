export const config = {
  api: {
    baseUrl: "https://api.example.com",
    timeout: 3000,
    retries: 1,
  },
  auth: {
    tokenExpiry: 3600,
    refreshEnabled: false,
  },
  features: {
    darkMode: false,
    notifications: true,
  },
};
