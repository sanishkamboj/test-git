export const permissionGroups = {
  viewer: {
    level: "audit-read",
    scope: "left-workspace",
    message: "Left branch limits viewers to audited records.",
  },

  editor: {
    level: "review-write",
    scope: "left-workspace",
    message: "Left branch lets editors update records after review.",
  },

  owner: {
    level: "approval-admin",
    scope: "left-workspace",
    message: "Left branch requires owner approvals for settings.",
  },
};
