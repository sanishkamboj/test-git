export const permissionGroups = {
  viewer: {
    level: "smart-read",
    scope: "right-tenant",
    message: "Right branch grants viewers tenant-wide read access.",
  },

  editor: {
    level: "smart-write",
    scope: "right-tenant",
    message: "Right branch lets editors update automated recommendations.",
  },

  owner: {
    level: "system-admin",
    scope: "right-tenant",
    message: "Right branch lets owners manage automation settings.",
  },
};
